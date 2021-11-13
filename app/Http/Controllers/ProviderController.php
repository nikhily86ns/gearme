<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Country;
use App\Models\Property;
use App\Models\Plan;
use App\Models\Notification;
use App\Models\PropertyNotification;
use DB;
use PDF;
use Auth;
use Redirect;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ProviderController extends Controller
{
// Fucntion To Post Plan By Capital Provider in Capital Provider Dashboard

    public function postPlan(Request $request)
    {
        $request->validate([
            "amount" => "required",
            "duration" => 'required', 
            "interest_min" => "required",
            "interest_max" => "required",
            "processing_fee" => "required",
            "validfrom" => "required",
            "validto" => "required",
        ]);
        $destinationPath = public_path('/plan');
        $filename = '';
            if($request->hasfile('file'))
            {
                $image = $request->file('file');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move($destinationPath, $filename);

                $plan = new Plan();
                $plan->amount = $request->amount;
                $plan->duration = $request->duration;
                $plan->interest_min = $request->interest_min;
                $plan->interest_max = $request->interest_max;
                $plan->processing_fee = $request->processing_fee;
                $plan->validfrom = $request->validfrom;
                $plan->validto = $request->validto;
                $plan->providerId = $request->providerId;
                $plan->image = $filename;
                $plan->save();
            }
            else{
                $plan = new Plan();
                $plan->amount = $request->amount;
                $plan->duration = $request->duration;
                $plan->interest_min = $request->interest_min;
                $plan->interest_max = $request->interest_max;
                $plan->processing_fee = $request->processing_fee;
                $plan->validfrom = $request->validfrom;
                $plan->validto = $request->validto;
                $plan->providerId = $request->providerId;
                $plan->save();
            }

        return redirect()->route('provider.dashboard');
    }

// Fucntion to Delete Plan by Capital Provider

    public function deletePlan($id)
    {
        Plan::find($id)->delete();
        return redirect()->route('provider.plan');
    }

// Function to view Update Plan Edit

    public function updatePlan($id)
    {
        $data = Plan::where('id','=',$id)->first();
        return view('provider.editPlan', compact('data'));
    }

// Fucntion to Update Existing PLan By Capital Provider

    public function editPlan(Request $request)
    {
        $destinationPath = public_path('/plan');
        if($request->hasfile('file')){
            $image = $request->file('file');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            
            Plan::where('id', $request->id)->update([
                                                "amount" => $request->amount,
                                                "duration" => $request->duration, 
                                                "interest_min" => $request->interest_min,
                                                "interest_max" => $request->interest_max,
                                                "processing_fee" => $request->processing_fee,
                                                "validfrom" => $request->validfrom,
                                                "validto" => $request->validto,
                                                "image" => $filename,
                                           ]);
        }
        else{
            Plan::where('id', $request->id)->update([
                                                "amount" => $request->amount,
                                                "duration" => $request->duration, 
                                                "interest_min" => $request->interest_min,
                                                "interest_max" => $request->interest_max,
                                                "processing_fee" => $request->processing_fee,
                                                "validfrom" => $request->validfrom,
                                                "validto" => $request->validto,
                                           ]);
        }
        return redirect()->route('provider.plan');

        // $destinationPath = public_path('/plan');
        // $filename = '';
        //     if($request->hasfile('file'))
        //     {
        //         $image = $request->file('file');
        //         $filename = time() . '.' . $image->getClientOriginalExtension();
        //         $image->move($destinationPath, $filename);  

        //             Plan::where('id',$request->id)->update([
        //                                 "amount" => $request->amount,
        //                                 "duration" => $request->duration, 
        //                                 "interest_min" => $request->interest_min,
        //                                 "interest_max" => $request->interest_max,
        //                                 "processing_fee" => $request->processing_fee,
        //                                 "validfrom" => $request->validfrom,
        //                                 "validto" => $request->validto,
        //                                 "image" => $filename,
        //                             ]);
        //     }
        //     else
        //     {
        //         Plan::where('id',$request->id)->update([
        //                                         "amount" => $request->amount,
        //                                         "duration" => $request->duration, 
        //                                         "interest_min" => $request->interest_min,
        //                                         "interest_max" => $request->interest_max,
        //                                         "processing_fee" => $request->processing_fee,
        //                                         "validfrom" => $request->validfrom,
        //                                         "validto" => $request->validto,
        //                                     ]);
        //     }

        // return redirect()->route('provider.dashboard');
    }

// Function To View Interested Investors in Provider Dashboard

    public function interestedInvetors()
    {


        $data = DB::table('notifications')
            ->join('users', 'users.id','=', 'notifications.investorId')
            ->join('plans', 'plans.id','=', 'notifications.planId')
            ->where('notifications.providerId','=', Auth::user()->id)
            ->select('plans.*','users.*', 'users.name as provider_name','notifications.id as notify_id' , 'plans.id as plan_id')
            ->get();

            // dd($data);
       
         
        return view('provider.interestedInvestor', compact('data'));
    }

// Function To View Potential Investors

    public function potentialInvetors()
    {
        $datap = DB::table('notifications')
        ->join('users', 'users.id','=', 'notifications.investorId')
        ->join('plans', 'plans.id','=', 'notifications.planId')
        ->where('notifications.providerId','!=', Auth::user()->id)
        ->select('plans.*','users.*', 'users.name as provider_name','notifications.id as notify_id')
        ->get();
        // $datap = DB::table('users')
        //     ->join('notifications', 'users.id','=', 'notifications.investorId')
        //     ->join('users as a', 'a.id','=', 'notifications.providerId')
        //     ->join('plans', 'plans.providerId','=','notifications.providerId')
        //     ->where('plans.providerId','!=', Auth::user()->id)
        //     ->select('plans.*','users.*','a.name as provider_name','notifications.id as notify_id')->get();

            return view('provider.potentialInvestor', compact('datap'));
    }

// Function to view Interested Investor Details in Provider Dashboard

    public function investorDetail($id)
    {
        // $data = User::where('id','=',$id)->first();
        $data = DB::table('users')
            ->join('notifications', 'users.id','=', 'notifications.investorId')
            ->join('users as a', 'a.id','=', 'notifications.providerId')
            ->where('notifications.id','=',$id)
            ->select('a.name as provider_name','users.name as investor_name','users.*')
            ->first();
        return view('provider.interestedInvestorDetails', compact('data'));
    }

// Function To View Provider Profile

    public function ProviderProfile()
    {
        $data = User::where('id','=' ,Auth::user()->id)->get();
        return view('provider.profile', compact('data'));
    }

// Function to View Change PassWord Page on invetsor Dashboard

    public function changeProviderPassword()
    {
        return view('provider.changePassword');
    }

// Function to Update Provider Profile

    public function updateProviderProfile(Request $request)
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
        
        return redirect()->route('provider.profile'); 
    }

// Function to Reset Provider Password

    public function resetProviderPassword(Request $request)
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
        return redirect()->route('provider.changeProviderPassword');
    }

// Function to View All Plans Of Provider in Provider Dashboard

    public function providerPlan()
    {
        $data = Plan::where('providerId','=',Auth::id())->get();
        return view('provider.plan',compact('data'));
    }
    


}