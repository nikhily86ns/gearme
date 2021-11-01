<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Country;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

// Fucntion To View All Owners in Admin 

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

<<<<<<< HEAD
=======
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

>>>>>>> 8fec82c9c3e575992e0ebcc21fdd996a4400e70d
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

<<<<<<< HEAD
=======
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
       ]);

        return redirect()->route('admin.investors');
    }

>>>>>>> 8fec82c9c3e575992e0ebcc21fdd996a4400e70d
// Fucntion To View All Providers in Admin 

    public function viewProviders()
    {
        $data = User::where('roles','=',2)->get();
        return view('admin.provider', compact('data'));
    }

<<<<<<< HEAD
// Function to Delete Property Owner
=======
// Function to Delete Capital Provider
>>>>>>> 8fec82c9c3e575992e0ebcc21fdd996a4400e70d

    public function deleteProvider($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.providers');
    }

<<<<<<< HEAD
=======
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
       ]);

        return redirect()->route('admin.providers');
    }

>>>>>>> 8fec82c9c3e575992e0ebcc21fdd996a4400e70d

}
