<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Auth::routes();

// Route::get('/register', [App\Http\Controllers\UserController::class, 'showRegistrationForm'])->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::get('/registerOwnerPage', [App\Http\Controllers\UserController::class, 'registerOwnerPage'])->name('registerOwnerPage');
Route::post('/registerOwner',  [App\Http\Controllers\UserController::class, 'registerOwner'])->name('registerOwner');

Route::get('/registerProviderPage', [App\Http\Controllers\UserController::class, 'registerProviderPage'])->name('registerProviderPage');
Route::post('/registerProvider',  [App\Http\Controllers\UserController::class, 'registerProvider'])->name('registerProvider');

Route::get('/registerInvestorPage', [App\Http\Controllers\UserController::class, 'registerInvestorPage'])->name('registerInvestorPage');
Route::post('/registerInvestor',  [App\Http\Controllers\UserController::class, 'registerInvestor'])->name('registerInvestor');

Route::post('/search-Properties',  [App\Http\Controllers\HomeController::class, 'welcomeSearch'])->name('search-Properties');



    Route::middleware(['isAdmin'])->group(function () {

        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'adminLogin'])->name('admin.dashboard');
        Route::get('/adminprofile', [App\Http\Controllers\AdminController::class, 'viewProfile'])->name('admin.profile');
        Route::post('/updateProfile', [App\Http\Controllers\AdminController::class, 'updateProfile'])->name('admin.updateProfile');
        Route::post('/resetAdminPassword', [App\Http\Controllers\AdminController::class, 'resetAdminPassword'])->name('admin.resetAdminPassword');

        Route::get('/owners', [App\Http\Controllers\AdminController::class, 'viewOwners'])->name('admin.owners');
        Route::get('/deleteOwner', [App\Http\Controllers\AdminController::class, 'deleteOwner'])->name('admin.deleteOwner');
        Route::get('/updateOwner/{id}', [App\Http\Controllers\AdminController::class, 'updateOwner'])->name('admin.updateOwner');
        Route::post('/editOwner', [App\Http\Controllers\AdminController::class, 'editOwner'])->name('admin.editOwner');
        Route::get('/exportOwner', [App\Http\Controllers\AdminController::class, 'exportOwner'])->name('admin.exportOwner');

        Route::get('/investors', [App\Http\Controllers\AdminController::class, 'viewInvestors'])->name('admin.investors');
        Route::get('/deleteInvestor', [App\Http\Controllers\AdminController::class, 'deleteInvestor'])->name('admin.deleteInvestor');
        Route::get('/updateInvestor/{id}', [App\Http\Controllers\AdminController::class, 'updateInvestor'])->name('admin.updateInvestor');
        Route::post('/editInvestor', [App\Http\Controllers\AdminController::class, 'editInvestor'])->name('admin.editInvestor');
        Route::get('/exportInvestor', [App\Http\Controllers\AdminController::class, 'exportInvestor'])->name('admin.exportInvestor');
      
        Route::get('/providers', [App\Http\Controllers\AdminController::class, 'viewProviders'])->name('admin.providers');
        Route::get('/deleteProvider', [App\Http\Controllers\AdminController::class, 'deleteProvider'])->name('admin.deleteProvider');
        Route::get('/updateProvider/{id}', [App\Http\Controllers\AdminController::class, 'updateProvider'])->name('admin.updateProvider');
        Route::post('/editProvider', [App\Http\Controllers\AdminController::class, 'editProvider'])->name('admin.editProvider');
        Route::get('/exportProvider', [App\Http\Controllers\AdminController::class, 'exportProvider'])->name('admin.exportProvider');


        Route::get('/properties', [App\Http\Controllers\AdminController::class, 'viewProperties'])->name('admin.properties');
        Route::get('/deleteProperties', [App\Http\Controllers\AdminController::class, 'deleteProperties'])->name('admin.deleteProperties');
        Route::get('/updateProperties/{id}', [App\Http\Controllers\AdminController::class, 'updateProperties'])->name('admin.updateProperties');
        Route::post('/editProperty', [App\Http\Controllers\AdminController::class, 'editProperty'])->name('admin.editProperty');

    });


    Route::middleware(['isOwner'])->group(function () {

        Route::get('/dashboard-Owner', [App\Http\Controllers\HomeController::class, 'ownerLogin'])->name('owner.dashboard');
        Route::get('/submit-Property', [App\Http\Controllers\OwnerController::class, 'submitProperty'])->name('owner.submitProperty');
        Route::post('/post-Property', [App\Http\Controllers\OwnerController::class, 'postProperty'])->name('owner.property');
        Route::get('/view-OwnerProperty/{id}', [App\Http\Controllers\OwnerController::class, 'viewProperty'])->name('owner.viewProperty');
        Route::post('/delete-Property/{id}', [App\Http\Controllers\OwnerController::class, 'deleteProperty'])->name('owner.deleteProperty');
        Route::get('/update-Property/{id}', [App\Http\Controllers\OwnerController::class, 'updateProperty'])->name('owner.updateProperty');
        Route::post('/edit-Properties', [App\Http\Controllers\OwnerController::class, 'editProperties'])->name('owner.editProperties');
        Route::get('/propertyDetail-Owner/{id}', [App\Http\Controllers\OwnerController::class, 'propertyDetailOwner'])->name('investor.propertyDetailOwner');

        Route::get('/propertyInterestedInvetors', [App\Http\Controllers\OwnerController::class, 'propertyInterestedInvetors'])->name('owner.propertyInterestedInvetors');
        Route::get('/interestedInvestorDetail/{id}', [App\Http\Controllers\OwnerController::class, 'interestedInvestorDetail'])->name('owner.interestedInvestorDetail');

        Route::get('/owner-Profile', [App\Http\Controllers\OwnerController::class, 'ownerProfile'])->name('owner.profile');
        Route::post('/update-OwnerProfile', [App\Http\Controllers\OwnerController::class, 'updateOwnerProfile'])->name('owner.updateProfile');
        Route::get('/change-OwnerPassword', [App\Http\Controllers\OwnerController::class, 'changeOwnerPassword'])->name('owner.changeOwnerPassword');
        Route::post('/resetOwner-Password', [App\Http\Controllers\OwnerController::class, 'resetOwnerPassword'])->name('owner.resetOwnerPassword');

    });


    Route::middleware(['isInvestor'])->group(function () {

        Route::get('/dashboardInvestor', [App\Http\Controllers\HomeController::class, 'investorLogin'])->name('investor.dashboard');
        Route::get('/propertyDetail/{id}', [App\Http\Controllers\UserController::class, 'propertyDetail'])->name('investor.propertyDetail');
        Route::post('/search',  [App\Http\Controllers\UserController::class, 'search'])->name('investor.search');
        Route::post('/filter',  [App\Http\Controllers\UserController::class, 'filter'])->name('investor.filter');
        Route::get('/selectPlans/{id}', [App\Http\Controllers\UserController::class, 'selectPlan'])->name('investor.selectPlan');
        Route::get('generatepdf/{id}', [App\Http\Controllers\UserController::class, 'generatePDF'])->name('investor.generatePDF');
        Route::post('/requestProvider', [App\Http\Controllers\UserController::class, 'requestProvider'])->name('investor.requestProvider');
        Route::post('/requestOwner', [App\Http\Controllers\UserController::class, 'requestOwner'])->name('investor.requestOwner');
        Route::get('/investorProfile', [App\Http\Controllers\UserController::class, 'investorProfile'])->name('investor.profile');
        Route::post('/updateInvestorProfile', [App\Http\Controllers\UserController::class, 'updateInvestorProfile'])->name('investor.updateProfile');

        Route::get('/viewAllProperty', [App\Http\Controllers\UserController::class, 'viewAllProperty'])->name('investor.viewAllProperty');
        Route::get('/viewRequestedProperty', [App\Http\Controllers\UserController::class, 'viewRequestedProperty'])->name('investor.viewRequestedProperty');
        Route::get('/viewFinance', [App\Http\Controllers\UserController::class, 'viewFinance'])->name('investor.viewFinance');
        Route::get('/viewRequestedFinance', [App\Http\Controllers\UserController::class, 'viewRequestedFinance'])->name('investor.viewRequestedFinance');

        Route::get('/changeInvestorPassword', [App\Http\Controllers\UserController::class, 'changeInvestorPassword'])->name('investor.changeInvestorPassword');
        Route::post('/resetInvestorPassword', [App\Http\Controllers\UserController::class, 'resetInvestorPassword'])->name('investor.resetInvestorPassword');
    });

    Route::middleware(['isProvider'])->group(function () {

        Route::get('/dashboardProvider', [App\Http\Controllers\HomeController::class, 'providerLogin'])->name('provider.dashboard');
        Route::post('/postPlan', [App\Http\Controllers\ProviderController::class, 'postPlan'])->name('provider.postPlan');
        Route::get('/updatePlans/{id}', [App\Http\Controllers\ProviderController::class, 'updatePlan'])->name('provider.updatePlans');
        Route::post('/editPlan', [App\Http\Controllers\ProviderController::class, 'editPlan'])->name('provider.editPlan');
        Route::post('/deletePlan/{id}', [App\Http\Controllers\ProviderController::class, 'deletePlan'])->name('provider.deletePlan');
        Route::get('/interestedInvetors', [App\Http\Controllers\ProviderController::class, 'interestedInvetors'])->name('provider.interestedInvetors');
        Route::get('/potentialInvetors', [App\Http\Controllers\ProviderController::class, 'potentialInvetors'])->name('provider.potentialInvetors');
        Route::get('/investorDetail/{id}', [App\Http\Controllers\ProviderController::class, 'investorDetail'])->name('provider.investorDetail');
        Route::get('/providerProfile', [App\Http\Controllers\ProviderController::class, 'providerProfile'])->name('provider.profile');
        Route::post('/updateProviderProfile', [App\Http\Controllers\ProviderController::class, 'updateProviderProfile'])->name('provider.updateProfile');
        Route::get('/providerPlan', [App\Http\Controllers\ProviderController::class, 'providerPlan'])->name('provider.plan');
        

        Route::get('/changeProviderPassword', [App\Http\Controllers\ProviderController::class, 'changeProviderPassword'])->name('provider.changeProviderPassword');
        Route::post('/resetProviderPassword', [App\Http\Controllers\ProviderController::class, 'resetProviderPassword'])->name('provider.resetProviderPassword');

    });


