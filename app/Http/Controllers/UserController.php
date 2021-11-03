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
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{

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

// Function to Save Property Details in Database by Propert Owner

    public function postProperty(Request $request)
    {
        $request->validate([
            "propertyFor" => "required",
            // "propertyType" => "required",
            "city" => "required",
            "locality" => 'required', 
            // "area" => "required",
            "price" => "required",
            // "images" => 'image|mimes:jpeg,png,jpg,jfif,gif,svg',
            // "unitType" => "required",
            // "bathroom" => "required",
            // "about" => "required",
            // "furnishing" => "required",
            // "balconies" => 'required', 
            // "parking" => "required",
            // "postedBy" => "required",
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

        // $data = [
        //     'propertyFor' => $request->propertyFor,
        //     'propertyType' => $request->propertyType,
        //     'city' => $request->city,
        //     'locality' => $request->locality,
        //     'unitType' => $request->unitType,
        //     'area' => $request->area,
        //     'price' => $request->price,
        //     'bathroom' => $request->bathroom,
        //     'about' => $request->about,
        //     'furnishing' => $request->furnishing,
        //     'balconies' => $request->balconies,
        //     'balconies' => $request->balconies,
        //     'parking' => $request->parking,
        //     'lock' => $request->lock,
        //     'cafeteria' => $request->cafeteria,
        // ];

        // $arr = json_encode($data);

                $property = new Property();
                $property->image = json_encode($image);
                $property->propertyFor = $request->propertyFor;
                $property->propertyType = $request->propertyType;
                $property->city = $request->city;
                $property->locality = $request->locality;
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
                $property->save();

        return redirect()->route('owner.dashboard');
    }

// Function to View All Posted Property By Property Owner

    public function viewProperty($id)
    {
        $data = Property::where('uid','=',$id)->get();
        return view('owner.property', compact('data'));
    }

// Function to Delete Property 

    public function deleteProperty($id)
    {
        User::find($id)->delete();
        return redirect()->route('owner.property');
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
        
        $id = Auth::user()->id;
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
                    'locality' => $request->locality,
                    'unitType' => $request->unitType,
                    'area' => $request->area,
                    'price' => $request->price,
                    'bathroom' => $request->bathroom,
                    'about' => $request->about,
                    'furnishing' => $request->furnishing,
                    'balconies' => $request->balconies,
                    'balconies' => $request->balconies,
                    'parking' => $request->parking,
                    'lock' => $request->lock,
                    'cafeteria' => $request->cafeteria,
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
                'unitType' => $request->unitType,
                'area' => $request->area,
                'price' => $request->price,
                'bathroom' => $request->bathroom,
                'about' => $request->about,
                'furnishing' => $request->furnishing,
                'balconies' => $request->balconies,
                'balconies' => $request->balconies,
                'parking' => $request->parking,
                'lock' => $request->lock,
                'cafeteria' => $request->cafeteria,
            ]);            
        }

        // return redirect()->route('owner.dashboard');
        return redirect()->route('owner.viewProperty', ['id' => $id]);
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

// Function to Search/Filter Property On Property Investor Dashboard

    public function search(Request $request)
    {
        $request->validate([
            "propertyFor" => "required",
            "propertyType" => "required",
            "budget" => 'required', 
            "search" => "required",
        ]);
        $propertyFor = $request->propertyFor;
        $propertyType = $request->propertyType;
        $price = $request->budget;
        $budget = explode('-',$price);
        $search = $request->search;

        $data = Property::where('propertyFor', $propertyFor)
        ->where('propertyType',$propertyType)
        ->whereBetween('price', $budget)->orderBY('id','desc')
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
