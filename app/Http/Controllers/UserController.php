<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Country;
use App\Models\Property;
use App\Models\Plan;
use App\Models\Notification;
use DB;
use PDF;
use Auth;
use Redirect;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{

// Function To View Owners Profile

    public function ownerProfile()
    {
        $data = User::where('id','=' ,Auth::user()->id)->get();
        return view('owner.profile', compact('data'));
    }

// Function to Update Owner Profile

    public function updateOwnerProfile(Request $request)
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
                                        //    dd(DB::getQueryLog());
        
        return redirect()->route('owner.profile'); 
    }

// Function to View Change PassWord Page on owner dashboard

    public function changeOwnerPassword()
    {
        return view('owner.changePassword');
    }

// Function to Reset Owner Password

    public function resetOwnerPassword(Request $request)
    {
        $request->validate([
            "password" => "min:6 | max:18", 
        ]);
   
        User::where('email', $request->email)->first()->update([
            'password' => Hash::make($request->password)
        ]);
        $request->session()->flash('success', 'User Password Reset Successfully');
        return redirect()->route('owner.changeOwnerPassword');
    }

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
            "password" => "min:6 | max:18", 
        ]);
   
        User::where('email', $request->email)->first()->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('investor.profile');
    }

// Function To View Provider Profile

    public function ProviderProfile()
    {
        $data = User::where('id','=' ,Auth::user()->id)->get();
        return view('provider.profile', compact('data'));
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
                                            'profileimage' =>  $filename
                                           ]);
        }
        else{
            User::where('email', $request->email)->update(['name' => $request->name ,
                                            'email' => $request->email,
                                            'phone' => $request->phone ,
                                            'country' => $request->country ,
                                           ]);
        }
                                        //    dd(DB::getQueryLog());
        
        return redirect()->route('provider.profile'); 
    }

// Function to Reset Provider Password

    public function resetProviderPassword(Request $request)
    {
        $request->validate([
            "password" => "min:6 | max:18", 
        ]);
   
        User::where('email', $request->email)->first()->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('provider.profile');
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

            Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'phone' => ['required', 'numeric', 'max:13'],
                'country' => ['required'],
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

            Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
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

            Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
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

// Function to view Submit Property Page

    public function submitProperty()
    {
        return view('owner.postProperty');
    }

// Function to Save Property Details in Database by Propert Owner

    public function postProperty(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            "propertyFor" => "required",
            "propertyType" => "required",
            "city" => "required",
            "area" => "required",
            "price" => "required",
        ]);

        $image = array();
        if($file = $request->file('images')){
            foreach($file as $file){
                $image_name = md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $destinationPath =  public_path('/property');
                $image_url = $destinationPath.$image_full_name;
                $file->move($destinationPath,$image_full_name);
                $image[] = $image_full_name;
            }
        }
                $property = new Property();
                // $property->image = json_encode($image);
                $property->propertyFor = $request->propertyFor;
                $property->propertyType = $request->propertyType;
                $property->city = $request->city;
                $property->unitType = $request->unitType;
                $property->area = $request->area;
                $property->price = $request->price;
                $property->bathroom = $request->bathroom;
                $property->about = $request->about;
                $property->furnishing = $request->furnishing;
                $property->balconies = $request->balconies;
                $property->parking = $request->parking;
                $property->lock = $request->lock;
                $property->cafeteria = $request->cafeteria;
                $property->posted_by = $request->postedBy;
                $property->uid = $request->uid;
                $property->address = $request->address;
                $property->title = $request->title;
                $property->state = $request->state;
                $property->zip = $request->zip;
                $property->feature = json_encode($request->input('features'));
                $property->save();

        return redirect()->route('owner.viewProperty', ['id' => $id]);
    }

// Function to View All Posted Property By Property Owner in owner dashboard

    public function viewProperty($id)
    {
        $data = Property::where('uid','=',$id)->get();
        return view('owner.property', compact('data'));
    }

// Function to Delete Property 

    public function deleteProperty($id)
    {
        $userId = Auth::user()->id;
        Property::find($id)->delete();
        return redirect()->route('owner.viewProperty', ['id' => $userId]);
    }

// Funstion to view Update Property Page

    public function updateProperty($id)
    {
        $data = Property::where('id','=',$id)->get();
        return view('owner.editProperty',compact('data'));
    }

// Function to Update Property  Details

    public function editProperties(Request $request)
    {
        
        $userId = Auth::user()->id;
        // dd($request->id);
        $image = array();
        if($file = $request->file('images')){
            foreach($file as $file){
                $image_name = md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $destinationPath =  public_path('/property');
                $image_url = $destinationPath.$image_full_name;
                $file->move($destinationPath,$image_full_name);
                $image[] = $image_full_name;

                Property::where('id', $request->id)->update([
                    'image' => json_encode($image),
                    'propertyFor' => $request->propertyFor,
                    'propertyType' => $request->propertyType,
                    'city' => $request->city,
                    'unitType' => $request->unitType,
                    'area' => $request->area,
                    'price' => $request->price,
                    'bathroom' => $request->bathroom,
                    'about' => $request->about,
                    'furnishing' => $request->furnishing,
                    'balconies' => $request->balconies,
                    'parking' => $request->parking,
                    'lock' => $request->lock,
                    'cafeteria' => $request->cafeteria,
                    'address' => $request->address,
                    'title' => $request->title,
                    'state' => $request->state,
                    'zip' => $request->zip,
                    'feature' => json_encode($request->input('features')),
                ]);
            }
        }
        else
        {
            Property::where('id', $request->id)->update([
                'propertyFor' => $request->propertyFor,
                'propertyType' => $request->propertyType,
                'city' => $request->city,
                'locality' => $request->locality,
                'area' => $request->area,
                'price' => $request->price,
                'bathroom' => $request->bathroom,
                'about' => $request->about,
                'furnishing' => $request->furnishing,
                'balconies' => $request->balconies,
                'parking' => $request->parking,
                'lock' => $request->lock,
                'cafeteria' => $request->cafeteria,
                'address' => $request->address,
                'title' => $request->title,
                'state' => $request->state,
                'zip' => $request->zip,
                'feature' => json_encode($request->input('features')),
            ]);            
        }

        // return redirect()->route('owner.dashboard');
        return redirect()->route('owner.viewProperty', ['id' => $userId]);
    }

// Function to view Property Detail on Owner Dashboard 

    public function propertyDetailOwner($id)
    {
        // $data = Property::where('id','=',$id)->first();
        $data = DB::table('properties')
              ->join('users', 'properties.uid','=', 'users.id')
              ->where('properties.id','=',$id)
              ->select('users.name','users.phone','properties.*')->first();
        $property = Property::all();
            //   print_r($data); die;
        return view('owner.propertyDetails', compact('data','property'));
    }

// Function to view Property Detail on Investor Dashboard 

    public function propertyDetail($id)
    {
        // $data = Property::where('id','=',$id)->first();
        $data = DB::table('properties')
              ->join('users', 'properties.uid','=', 'users.id')
              ->where('properties.id','=',$id)
              ->select('users.name','users.phone','properties.*')->first();
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
        
        $propertyFor = $request->propertyFor;
        $propertyType = $request->propertyType;
        $price = $request->budget;
        $budget = explode('-',$price);
        $search = $request->search;

        // $data = Property::where('propertyFor', $propertyFor)
        // ->where('propertyType',$propertyType)
        // ->whereBetween('price', $budget)->orderBY('id','desc')
        // ->where('city','LIKE','%'.$search.'%')->take(10)->get();

        $data = Property::where('propertyType',$propertyType)
        ->where('city','LIKE','%'.$search.'%')->take(10)->get();

        $property = Property::paginate(6);
        return view('investor.viewProperty',compact('data','property'));
        
    }

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
        return redirect()->route('provider.dashboard');
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

                    Plan::where('id',$request->id)->update([
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
            else
            {
                Plan::where('id',$request->id)->update([
                                                "amount" => $request->amount,
                                                "duration" => $request->duration, 
                                                "interest_min" => $request->interest_min,
                                                "interest_max" => $request->interest_max,
                                                "processing_fee" => $request->processing_fee,
                                                "validfrom" => $request->validfrom,
                                                "validto" => $request->validto,
                                            ]);
            }

        return redirect()->route('provider.dashboard');
    }

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

            return redirect()->route('investor.dashboard');
        }
        // Notification::create([
        //         'planId' => $request->planId;
        // ]);
        
    }

// Function To View Interested Investors

    public function interestedInvetors()
    {
        $data = DB::table('users')
            ->join('notifications', 'users.id','=', 'notifications.investorId')
            ->join('users as a', 'a.id','=', 'notifications.providerId')
            ->join('plans', 'plans.providerId','=','notifications.providerId')
            ->where('plans.providerId','=', Auth::user()->id)
            ->select('plans.*','users.*','a.name as provider_name','notifications.id as notify_id')->get();
            // dd($data);
       
        //    dd($datap); 
        return view('provider.interestedInvestor', compact('data'));
    }

// Function To View Potential Investors

    public function potentialInvetors()
    {
        $datap = DB::table('users')
            ->join('notifications', 'users.id','=', 'notifications.investorId')
            ->join('users as a', 'a.id','=', 'notifications.providerId')
            ->join('plans', 'plans.providerId','=','notifications.providerId')
            ->where('plans.providerId','!=', Auth::user()->id)
            ->select('plans.*','users.*','a.name as provider_name','notifications.id as notify_id')->get();

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

}
