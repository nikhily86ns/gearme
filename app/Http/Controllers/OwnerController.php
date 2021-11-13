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

class OwnerController extends Controller
{

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
            "country" => "required",
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
                $property->country = $request->country;
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
                    'country' => $request->country,
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
                'country' => $request->country,
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

// Function to View Change PassWord Page on owner dashboard

    public function changeOwnerPassword()
    {
        return view('owner.changePassword');
    }

// Function to View Interested INvestors in Owner Dashboard

    public function propertyInterestedInvetors()
    {

        $data = DB::table('property_notifications')
            ->join('users', 'users.id','=', 'property_notifications.investorId')
            ->join('properties', 'properties.id','=', 'property_notifications.propertyId')
            ->where('property_notifications.ownerId','=', Auth::user()->id)
            ->select('properties.*','users.*', 'users.name as owner_name','property_notifications.id as notify_id','property_notifications.description'
                , 'properties.id as property_id')
            ->get();

            // dd($data);
       
         
        return view('owner.interestedInvestor', compact('data'));
    }

// Function to view Interested Investor Details in Owner Dashboard

    public function interestedInvestorDetail($id)
    {
        // $data = User::where('id','=',$id)->first();
        $data = DB::table('users')
            ->join('property_notifications', 'users.id','=', 'property_notifications.investorId')
            ->join('users as a', 'a.id','=', 'property_notifications.ownerId')
            ->where('property_notifications.id','=',$id)
            ->select('a.name as owner_name','users.name as investor_name','users.*')
            ->first();
        return view('owner.investorDetails', compact('data'));
    }

// Function to Reset Owner Password

    public function resetOwnerPassword(Request $request)
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
        return redirect()->route('owner.changeOwnerPassword');
    }

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

}
