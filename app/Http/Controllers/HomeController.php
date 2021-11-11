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
        $this->middleware('auth');
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
        return view('owner.dashboard');
    }

// Capital Provider Dashboard

    public function providerLogin()
    {
        $data = Plan::where('providerId','=',Auth::id())->get();
        return view('provider.dashboard',compact('data'));
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
}
