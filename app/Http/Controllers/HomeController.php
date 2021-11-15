<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Property;
use App\Models\Plan;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'welcomeSearch']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

// For Welcome Pgae 
 
    // public function welcome()
    // {
    //     $data = Property::where('status','=','Approved')->paginate(6);
    //     return view('welcome', compact('data'));
    // }

// Admin Route Dashboard

    public function adminLogin()
    {
        $posted_by_owner =  DB::select("SELECT
        sum(case when posted_by = 'owner' then 1 else 0 end) AS ownerPosted
        FROM properties");
        $totalowners = DB::select("SELECT
        sum(case when roles = 1 then 1 else 0 end) AS totalowners
        FROM users");
        $totalinvestors = DB::select("SELECT
        sum(case when roles = 3 then 1 else 0 end) AS totalinvestors
        FROM users");
        $totalproviders = DB::select("SELECT
        sum(case when roles = 2 then 1 else 0 end) AS totalproviders
        FROM users");
   
        if (isset($posted_by_owner[0]) && isset($totalowners[0])) 
        {
            $data['ownerPosted'] =  $posted_by_owner[0]->ownerPosted;
            $data['totalowners'] =  $totalowners[0]->totalowners;
            $data['totalinvestors'] =  $totalinvestors[0]->totalinvestors;
            $data['totalproviders'] =  $totalproviders[0]->totalproviders;
        } 
        else 
        {
            $data['ownerPosted'] =  '00';
            $data['totalowners'] =  '00';
            $data['totalinvestors'] =  '00';
            $data['totalproviders'] =  '00';
        }

        return view('admin.dashboard', compact('data'));
        // return view('admin.dashboard');
    }

// Property Owner Dashboard

    public function ownerLogin()
    {


        $totalProperties =   Property::select('*')
                        ->from(DB::raw("( SELECT * FROM `properties`
                          WHERE `uid` = ".Auth::user()->id.") as `totalProperties`"))->count();
        $approvedProperties =   Property::select('*')
                        ->from(DB::raw("( SELECT * FROM `properties`
                          WHERE `uid` = ".Auth::user()->id." AND `status` = 'Approved') as `approvedProperties`"))->count();
        $notApprovedProperties =   Property::select('*')
                        ->from(DB::raw("( SELECT * FROM `properties`
                          WHERE `uid` = ".Auth::user()->id." AND `status` = 'Not Approved') as `notApprovedProperties`"))->count();

                        //   print_r($approvedProperties);
                        //   print_r($notApprovedProperties);
                        //   print_r($totalProperties); die;
   
        if ($totalProperties && $approvedProperties) 
        {
            $data['totalProperties'] =  $totalProperties;
            $data['approvedProperties'] =  $approvedProperties;
            $data['notApprovedProperties'] =  $notApprovedProperties;
        } 
        else 
        {
            $data['totalProperties'] =  '00';
            $data['approvedProperties'] =  '00';
            $data['notApprovedProperties'] =  '00';
        }
        return view('owner.dashboard', compact('data'));
    }

// Capital Provider Dashboard

    public function providerLogin()
    {
        $totalplans =   Plan::select('*')
                ->from(DB::raw("( SELECT * FROM `plans`
                WHERE `providerId` = ".Auth::user()->id.") as `totalplans`"))->count();
        $totalinvestors = User::select('*')
        ->from(DB::raw("( SELECT * FROM `users`
          WHERE `roles` = '3') as `totalinvestors`"))->count();
        
        
        $interestedinvestors = DB::table('notifications')
            ->join('users', 'users.id','=', 'notifications.investorId')
            ->join('plans', 'plans.id','=', 'notifications.planId')
            ->where('notifications.providerId','=', Auth::user()->id)
            ->select('*')
            ->count();
        // $interestedinvestors =   Plan::select('*')
        //         ->from(DB::raw("( SELECT * FROM `plans`
        //         WHERE `providerId` = ".Auth::user()->id." ) as `interestedinvestors`"))->count();

                //   print_r($totalinvestors);
                //    print_r($interestedinvestors);
                //    print_r($totalplans); 
                //   die;

        if ($totalplans && $totalinvestors) 
        {
        $data['totalplans'] =  $totalplans;
        $data['totalinvestors'] =  $totalinvestors;
        $data['interestedinvestors'] =  $interestedinvestors;
        } 
        else 
        {
        $data['totalplans'] =  '00';
        $data['totalinvestors'] =  '00';
        $data['interestedinvestors'] =  '00';
        }
        return view('provider.dashboard', compact('data'));
    }

// Property Investor Dashboard

    public function investorLogin()
    {
        $data = Property::where('status','=','Approved')->paginate(6);
        $currentDate = date('Y-m-d');
        $finance = User::where('roles','2')->get();
        foreach($finance as $key => $value)
        {
            $plan = Plan::where([
                ['providerId',$value->id],
                ['validto','>=',$currentDate]
                ])->get();
            if(count($plan) > 0)
            {
                $finance[$key] = $value;
                $finance[$key]->plan = $plan;
            }
        }
        // print_r($finance);
        // die();
        $plan = DB::table('plans')
                ->join('users', 'users.id','=', 'plans.providerId')
                ->select('plans.*', 'users.name')->get();

        return view('investor.dashboard', compact('data','finance','plan'));
    }
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

// Function to Perform Searching on Welcome Page

    public function welcomeSearch(Request $request)
    {
        $propertyType = $request->propertyType;
        $search = $request->search;

        if($propertyType == '' && $search == '')
        {
            return redirect()->route('welcome');
        }
        else if($search == '')
        {
            $data = Property::where('propertyType' , $propertyType)->take(10)->get();
            $property = Property::paginate(6);
            return view('allProperties',compact('data','property'));
        }
        else if($propertyType == '')
        {
            $data = Property::where('city' ,$search )->take(10)->get();
            $property = Property::paginate(6);
            return view('allProperties',compact('data','property'));
        }
        else
        {
            $matchThese = ['propertyType' => $propertyType, 'city' => $search];
            $data = Property::where($matchThese)->take(10)->get();
            $property = Property::paginate(6);
            return view('allProperties',compact('data','property'));
        }
        
    }





}
