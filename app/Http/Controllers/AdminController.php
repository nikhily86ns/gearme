<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Country;
use App\Models\Property;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

// Function To View Admins Profile

    public function viewProfile()
    {
        $data = User::where('is_admin','=' ,1)->get();
        return view('admin.profile', compact('data'));
    }

// Function to Update Admin Profile

    public function updateProfile(Request $request)
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
            
        User::where('is_admin', 1)->update(['name' => $request->name ,
                                            'email' => $request->email,
                                            'phone' => $request->phone ,
                                            'country' => $request->country ,
                                            'profileimage' =>  $filename
                                           ]);
        }
        else{
            User::where('is_admin', 1)->update(['name' => $request->name ,
                                            'email' => $request->email,
                                            'phone' => $request->phone ,
                                            'country' => $request->country ,
                                           ]);
        }
                                        //    dd(DB::getQueryLog());
        
        return redirect()->route('admin.profile'); 
    }

// Function to Reset Admin Password

    public function resetAdminPassword(Request $request)
    {
        $request->validate([
            "password" => "min:6 | max:18", 
        ]);
   
        User::where('email', $request->email)->first()->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('admin.profile');
    }

// Function To View All Owners in Admin 

    public function viewOwners()
    {
        $data = User::where('roles','=',1)->get();
        return view('admin.owner', compact('data'));
    }

// Function to Delete Property Owner

    public function deleteOwner($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.owners');
    }

// Funstion to view Update Owner Page

    public function updateOwner($id)
    {
        $data = User::where('id','=',$id)->get();
        $country = Country::all();
        return view('admin.editOwner',compact('data','country'));
    }

// Function to Update Property Owner Details

    public function editOwner(Request $request)
    {
        User::where('id', $request->id)->update(['name' => $request->name ,
        'phone' => $request->phone ,
        'country' => $request->country,
       ]);

        return redirect()->route('admin.owners');
    }

// Fucntion To View All Investors in Admin 

    public function viewInvestors()
    {
        $data = User::where('roles','=',3)->get();
        return view('admin.investor', compact('data'));
    }

// Function to Delete Property Owner

    public function deleteInvestor($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.investors');
    }


// Funstion to view Update Investor Page

    public function updateInvestor($id)
    {
        $data = User::where('id','=',$id)->get();
        $country = Country::all();
        return view('admin.editInvestor',compact('data','country'));
    }

// Function to Update Property Investor Details

    public function editInvestor(Request $request)
    {
        User::where('id', $request->id)->update(['name' => $request->name ,
        'phone' => $request->phone ,
        'country' => $request->country,
        'status' => $request->status ,
        'reason' => $request->reason,
       ]);

        return redirect()->route('admin.investors');
    }

// Fucntion To View All Providers in Admin 

    public function viewProviders()
    {
        $data = User::where('roles','=',2)->get();
        return view('admin.provider', compact('data'));
    }


// Function to Delete Capital Provider

    public function deleteProvider($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.providers');
    }

// Funstion to view Update Provider Page

    public function updateProvider($id)
    {
        $data = User::where('id','=',$id)->get();
        $country = Country::all();
        return view('admin.editProvider',compact('data','country'));
    }

// Function to Update Property Provider Details

    public function editProvider(Request $request)
    {
        User::where('id', $request->id)->update(['name' => $request->name ,
        'phone' => $request->phone ,
        'country' => $request->country,
        'status' => $request->status ,
        'reason' => $request->reason,
       ]);

        return redirect()->route('admin.providers');
    }

// Function to View All Property Page

    public function viewProperties()
    {
        $data = Property::all();
        return view('admin.property', compact('data'));
    }

// Function to Delete Property 

    public function deleteProperties($id)
    {
        Property::find($id)->delete();
        return redirect()->route('admin.properties');
    }

// Funstion to view Update Property Page

    public function updateProperties($id)
    {
        $data = Property::where('id','=',$id)->get();
        return view('admin.editProperty',compact('data'));
    }

// Function to Update Property  Details

    public function editProperty(Request $request)
    {
        Property::where('id', $request->id)->update([
        'status' => $request->status ,
        'reason' => $request->reason ,
       ]);

        return redirect()->route('admin.properties');
    }


}
