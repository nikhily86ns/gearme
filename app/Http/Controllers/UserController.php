<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Country;
use App\Models\Property;
use App\Models\Plan;
use App\Models\Notification;
use App\Models\Chat;
use App\Models\Proposal;
use App\Models\ChatNotification;
use App\Models\PropertyNotification;
use DB;
use PDF;
use Auth;
use Redirect;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{





// Function to view All Properties in Investor Dashboard 

    public function viewAllProperty()
    {
        $data = Property::where('status','=','Approved')->paginate(10);
        return view('investor.viewProperty', compact('data'));
    }

// Function To View Investor Profile

    public function InvestorProfile()
    {
        $data = User::where('id','=' ,Auth::user()->id)->get();
        return view('investor.profile', compact('data'));
    }

// Function to Update Investor Profile

    public function updateInvestorProfile(Request $request)
    {  
        $validator = Validator::make($request->all(), [
            "name" => "regex:/^[a-zA-Z]+$/u|max:255",
            "phone" => "min:10|numeric",
            "file" => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $destinationPath = public_path('/profile');
        if($request->hasfile('file')){
            $image = $request->file('file');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            
        User::where('email', $request->email)->update(['name' => $request->name ,
                                            'email' => $request->email,
                                            'phone' => $request->phone ,
                                            'country' => $request->country ,
                                            'profileimage' =>  $filename,
                                            'address' => $request->address ,
                                            'city' => $request->city ,
                                            'state' => $request->state ,
                                            'zip' => $request->zip ,
                                            'about' => $request->about ,
                                            'facebook' => $request->facebook ,
                                            'twitter' => $request->twitter ,
                                            'google' => $request->google ,
                                            'linkedin' => $request->linkedin ,
                                           ]);
        }
        else{
            User::where('email', $request->email)->update(['name' => $request->name ,
                                            'email' => $request->email,
                                            'phone' => $request->phone ,
                                            'country' => $request->country ,
                                            'address' => $request->address ,
                                            'city' => $request->city ,
                                            'state' => $request->state ,
                                            'zip' => $request->zip ,
                                            'about' => $request->about ,
                                            'facebook' => $request->facebook ,
                                            'twitter' => $request->twitter ,
                                            'google' => $request->google ,
                                            'linkedin' => $request->linkedin ,
                                           ]);
        }

        return redirect()->route('investor.profile'); 
    }

// Function to View Change PassWord Page on invetsor Dashboard

    public function changeInvestorPassword()
    {
        return view('investor.changePassword');
    }

// Function to Reset Investor Password

    public function resetInvestorPassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6'
        ]);
        $data = $request->all();
        $user = User::find($request->id);
        if (!Hash::check($data['old_password'], $user->password)) {
            return back()->with('danger', 'The specified password does not match the database password');
        } else {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
            return back()->with('success', 'Successfully Changed');
        }
        return redirect()->route('investor.changeInvestorPassword');
    }



// Function to view Registration Form

    // public function showRegistrationForm()
    // {
    //     $data = Country::all();
    //     return view('auth.register', compact('data'));
    // }

//Function to view Registeration Page 

    // public function registerOwnerPage()
    // {
    //     return view('registerOwner');
    // }

// Function to Register Property Owner

    public function registerOwner(Request $request)
    {

            // Validator::make($request->all(), [
            //     'name' => ['required', 'string', 'max:255'],
            //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //     'password' => ['required', 'string', 'min:8', 'confirmed'],
            //     'phone' => ['required', 'numeric', 'max:13'],
            //     'country' => ['required'],
            // ]);
            $request->validate([
                "name" => "required",
                "email" => "required",
                "password" => "required",
                "phone" => "required",
                "country" => "required",
            ]);
   
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->roles = '1';
            $user->phone = $request->phone;
            $user->country = $request->country;
            $user->save();

            return redirect()->route('owner.dashboard');  
   
    }

//Function to view Registeration Page 

    // public function registerProviderPage()
    // {
    //     return view('registerProvider');
    // }

// Function to Register Property Owner

    public function registerProvider(Request $request)
    {

            $request->validate([
                "name" => "required",
                "email" => "required",
                "password" => "required",
                "phone" => "required",
                "country" => "required",
            ]);
   
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->roles = '2';
            $user->phone = $request->phone;
            $user->country = $request->country;
            $user->save();

            return redirect()->route('provider.dashboard');  
   
    }

    //Function to view Registeration Page 

    // public function registerInvestorPage()
    // {
    //     return view('registerInvestor');
    // }

// Function to Register Property Owner

    public function registerInvestor(Request $request)
    {

            $request->validate([
                "name" => "required",
                "email" => "required",
                "password" => "required",
                "phone" => "required",
                "country" => "required",
            ]);
   
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->roles = '3';
            $user->phone = $request->phone;
            $user->country = $request->country;
            $user->save();

            // return redirect('/home');
            return redirect()->route('investor.dashboard');  
   
    }


// Function to view Property Detail on Investor Dashboard 

    public function propertyDetail($id)
    {
        // $data = Property::where('id','=',$id)->first();
        $data = DB::table('properties')
              ->join('users', 'properties.uid','=', 'users.id')
              ->where('properties.id','=',$id)
              ->select('users.name','users.phone','properties.*','users.id as ownerId')->first();
        $property = Property::all();
            //   print_r($data); die;
        return view('investor.propertyDetail', compact('data','property'));
    }

// Function to view All FInanace Option in Investor Dashboard

    public function viewFinance()
    {
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
        // dd($finance); 
        $plan = DB::table('plans')
                ->join('users', 'users.id','=', 'plans.providerId')
                ->select('plans.*', 'users.name')->get();

        return view('investor.viewFinance', compact('finance','plan'));
    }

// Function to Search/Filter Property On Property Investor Dashboard

    public function search(Request $request)
    {
        
        // $propertyFor = $request->propertyFor;
        $propertyType = $request->propertyType;
        // $price = $request->budget;
        // $budget = explode('-',$price);
        $search = $request->search;

        if($propertyType == '' && $search == '')
        {
            return redirect()->route('investor.viewAllProperty');
        }
        else if($search == '')
        {
            $data = Property::where('propertyType' , $propertyType)->take(10)->get();
            $property = Property::paginate(6);
            return view('investor.viewProperty',compact('data','property'));
        }
        else if($propertyType == '')
        {
            $data = Property::where('city' ,$search )->take(10)->get();
            $property = Property::paginate(6);
            return view('investor.viewProperty',compact('data','property'));
        }
        else
        {
            $matchThese = ['propertyType' => $propertyType, 'city' => $search];
            $data = Property::where($matchThese)->take(10)->get();
            $property = Property::paginate(6);
            return view('investor.viewProperty',compact('data','property'));
        }

        // $data = Property::where('propertyFor', $propertyFor)
        // ->where('propertyType',$propertyType)
        // ->whereBetween('price', $budget)->orderBY('id','desc')
        // ->where('city','LIKE','%'.$search.'%')->take(10)->get();

        // $data = Property::where('propertyType',$propertyType)
        // ->orWhere('city','LIKE','%'.$search.'%')->take(10)->get();

        // $matchThese = ['propertyType' => $propertyType, 'city' => $search];

        // $data = Property::where($matchThese)->take(10)->get();

        // $property = Property::paginate(6);
        // return view('investor.viewProperty',compact('data','property'));
        
    }

// Function to View Requested Properties in Investor Dashboard
    
    public function viewRequestedProperty()
    {
        $data = DB::table('property_notifications')
            ->join('users', 'users.id','=', 'property_notifications.investorId')
            ->join('properties', 'properties.id','=', 'property_notifications.propertyId')
            ->where('property_notifications.investorId','=', Auth::user()->id)
            ->select('properties.*','users.*', 'users.name as owner_name','property_notifications.id as notify_id','properties.id as propertyId')
            ->get();

        return view('investor.requestedProperty', compact('data'));
    }

// Function to View Requested Finance Options in Investor Dashboard

    public function viewRequestedFinance()
    {
        $data = DB::table('notifications')
            ->join('users', 'users.id','=', 'notifications.providerId')
            ->join('plans', 'plans.id','=', 'notifications.planId')
            ->where('notifications.investorId','=', Auth::user()->id)
            ->select('plans.*','users.*', 'users.name as provider_name','notifications.id as notify_id')
            ->get();
        $unseen = DB::table('chat_notifications')
            ->join('chats', function ($join) {
                $join->on('chats.receiver_id', '=','chat_notifications.investor_id' )
                ->where('chats.is_seen', '=', NULL);
            })
            ->join('users', 'users.id','=', 'chats.receiver_id')
            ->where('chat_notifications.investor_id','=', Auth::user()->id)
            ->select('chats.*')->distinct()
            ->get();
            //  dd($unseen[0]->user_id);
        return view('investor.requestedFinance', compact('data','unseen'));
    }

// Function to get Counts of unseen message

    // public function getCounts(Request $request)
    // {
    //     $count = DB::table('chat_notifications')
    //         ->join('chats', function ($join) {
    //             $join->on('chats.receiver_id', '=','chat_notifications.investor_id' )
    //             ->where('chats.is_seen', '=', NULL);
    //         })
    //         ->join('users', function ($join) {
    //             $join->on('users.id', '=','chats.receiver_id' )
    //             ->where('users.id', '=', $request->provider_id);
    //         })
    //         // ->join('users', 'users.id','=', 'chats.receiver_id')
    //         ->where('chat_notifications.investor_id','=', Auth::user()->id)
    //         ->select('chats.*')->distinct()
    //         ->get();

    //     return response()->json(['count'=>$count]);
    // }

// Function to Download PDF 

    public function generatePDF($id)
    {
        $data = Plan::where('id','=',$id)->first();
        $pdf = PDF::loadView('investor.brochure', ['data' => $data]);

        $pdf->getDomPDF()->setHttpContext(
            stream_context_create([
                'ssl' => [
                    'allow_self_signed'=> TRUE,
                    'verify_peer' => FALSE,
                    'verify_peer_name' => FALSE,
                ]
            ])
        );

        return $pdf->download('brochure.pdf');
    }

// Function to Select The Plan By Property Investor

    public function selectPlan($id)
    {
        $data = Plan::where('id','=',$id)->first();
        return view('investor.selectPlan', compact('data'));
    }

// Function to Request Provider For Capital 

    public function requestProvider(Request $request)
    {
        $notification = new Notification();
        $notifiy = Notification::where('planId',$request->planId)->where('investorId',$request->investorId)->where('providerId',$request->providerId)->get();
        if(count($notifiy) > 0)
        {
            return redirect()->route('investor.dashboard')->with('error','Message');
        }
        else
        {
            $notification->planId = $request->planId; 
            $notification->investorId = $request->investorId; 
            $notification->providerId = $request->providerId; 
            $notification->save();

            return redirect()->route('investor.viewFinance');
        }
        // Notification::create([
        //         'planId' => $request->planId;
        // ]);
        
    }

// Function to Request Owner For Property

    public function requestOwner(Request $request)
    {
        $notification = new PropertyNotification();
        $notifiy = PropertyNotification::where('propertyId',$request->propertyId)->where('investorId',$request->investorId)->where('ownerId',$request->ownerId)->get();
        if(count($notifiy) > 0)
        {
            return redirect()->route('investor.viewAllProperty')->with('error','Message');
        }
        else
        {
            $notification->propertyId = $request->propertyId; 
            $notification->investorId = $request->investorId; 
            $notification->ownerId = $request->ownerId; 
            $notification->description = $request->description; 
            $notification->save();

            return redirect()->route('investor.viewAllProperty');
        }
    }


// Funciton to View Chat Page

    public function investorChat($id)
    {
        // $data = DB::table('chat_notifications')
        //     ->join('users', 'users.id','=', 'chat_notifications.investor_id')
        //     ->join('chats', 'chats.id','=', 'chat_notifications.chat_id')
        //     ->where('chat_notifications.investor_id','=', Auth::user()->id)
        //     ->select('chats.*','users.*', 'users.name as provider_name','chat_notifications.*')
        //     ->get();

        Chat::where('user_id',$id)->update(['is_seen' => 1]);

        $data = User::where('id','=',$id)->first();
        return view('investor.providerChat',compact('data'));
    }

// Function to save message to Database 

    public function sendChats(Request $request)
    {
        $chat = new Chat();
        $chat->user_id = $request->user_id;
        $chat->receiver_id = $request->receiver_id;
        $chat->message = $request->message;
        $chat->save();

        $chats = Chat::latest()->first();
        $user = Auth::user();
        
        return response()->json(['success'=>'Data is successfully added','chat'=>$chats,'user'=> $user]);

    }

// Function to get message from database

    public function getChats(Request $request)
    {
        $user_id = $request->user_id;
        $receiver_id = $request->receiver_id;    

            $chats = Chat::where(function ($query) use($user_id, $receiver_id) {
                        $query->where('user_id','=', $user_id)
                            ->where('receiver_id','=', $receiver_id);
                    })->orWhere(function ($query) use($user_id, $receiver_id) {
                        $query->where('user_id', $receiver_id)
                            ->where('receiver_id', $user_id);
                    })->get();
            
             $msg = '';

             foreach($chats as $chat) {
                 $profile =  asset('profile/'. Auth::user()->profileimage);
                 $profiler = asset('profile/'. User::find($chat->user_id)->profileimage);
                if($chat->user_id == Auth::user()->id) {
                    $name = Auth::user()->name;
                    $time = explode(" ",User::find($chat->user_id)->created_at);
                    $msg = $msg.'<div class="msg right-msg" id="mymsg">
                    <div
                    class="msg-img" id="sendimg"
                    style="background-image: url('.$profile.');"
                    ></div>

                    <div class="msg-bubble" id="msgs">
                        <div class="msg-info">
                        <div class="msg-info-name">'.$name.'</div>
                        <div class="msg-info-time">'.$time[1].'</div>
                        </div>

                        <div class="msg-text sent" id="sent">
                        '.$chat->message.'
                        </div>
                    </div>
                </div>';
                } 
                else {
                    $name = User::find($chat->user_id)->name;
                    $time = User::find($chat->user_id)->created_at->format('H:i:s');
                    $msg = $msg.'<div class="msg left-msg">
                    <div
                    class="msg-img" id="getimg
                    "
                    style="background-image: url('.$profiler.');"
                    ></div>

                    <div class="msg-bubble">
                        <div class="msg-info">
                        <div class="msg-info-name">'.$name.'</div>
                        <div class="msg-info-time">'.$time.'</div>
                        </div>

                        <div class="msg-text">
                        '.$chat->message.'
                        </div>
                    </div>
                </div>';
                }
             }

             return response()->json(['success'=>'Data is successfully added','msg'=>$msg]);

    }

    public function inbox()
    {
        // $data = Proposal::where('investor_id','=',Auth::user()->id)->get();
        $data = DB::table('proposals')
                ->join('users', 'proposals.user_id','=','users.id')
                ->where('proposals.receiver_id','=',Auth::user()->id)
                ->select('proposals.*','users.name')
                ->get();
                // dd($data);
        return view('investor.inbox',compact('data'));
    }





}
