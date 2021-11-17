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
Route::post('/register-Owner',  [App\Http\Controllers\UserController::class, 'registerOwner'])->name('registerOwner');

Route::get('/registerProviderPage', [App\Http\Controllers\UserController::class, 'registerProviderPage'])->name('registerProviderPage');
Route::post('/register-Provider',  [App\Http\Controllers\UserController::class, 'registerProvider'])->name('registerProvider');

Route::get('/registerInvestorPage', [App\Http\Controllers\UserController::class, 'registerInvestorPage'])->name('registerInvestorPage');
Route::post('/register-Investor',  [App\Http\Controllers\UserController::class, 'registerInvestor'])->name('registerInvestor');

Route::post('/search-Properties',  [App\Http\Controllers\HomeController::class, 'welcomeSearch'])->name('search-Properties');
Route::get('/about-us',  [App\Http\Controllers\HomeController::class, 'about'])->name('aboutus');
Route::get('/contact-us',  [App\Http\Controllers\HomeController::class, 'contact'])->name('contactus');



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

        Route::get('/dashboard-owner', [App\Http\Controllers\HomeController::class, 'ownerLogin'])->name('owner.dashboard');
        Route::get('/submit-property', [App\Http\Controllers\OwnerController::class, 'submitProperty'])->name('owner.submitProperty');
        Route::post('/post-Property', [App\Http\Controllers\OwnerController::class, 'postProperty'])->name('owner.property');
        Route::get('/view-owner-property/{id}', [App\Http\Controllers\OwnerController::class, 'viewProperty'])->name('owner.viewProperty');
        Route::post('/delete-Property/{id}', [App\Http\Controllers\OwnerController::class, 'deleteProperty'])->name('owner.deleteProperty');
        Route::get('/update-property/{id}', [App\Http\Controllers\OwnerController::class, 'updateProperty'])->name('owner.updateProperty');
        Route::post('/edit-Properties', [App\Http\Controllers\OwnerController::class, 'editProperties'])->name('owner.editProperties');
        Route::get('/property-detail-owner/{id}', [App\Http\Controllers\OwnerController::class, 'propertyDetailOwner'])->name('investor.propertyDetailOwner');

        Route::get('/propertyInterestedInvetors', [App\Http\Controllers\OwnerController::class, 'propertyInterestedInvetors'])->name('owner.propertyInterestedInvetors');
        Route::get('/interestedInvestorDetail/{id}', [App\Http\Controllers\OwnerController::class, 'interestedInvestorDetail'])->name('owner.interestedInvestorDetail');

        Route::get('/owner-profile', [App\Http\Controllers\OwnerController::class, 'ownerProfile'])->name('owner.profile');
        Route::post('/update-OwnerProfile', [App\Http\Controllers\OwnerController::class, 'updateOwnerProfile'])->name('owner.updateProfile');
        Route::get('/change-owner-password', [App\Http\Controllers\OwnerController::class, 'changeOwnerPassword'])->name('owner.changeOwnerPassword');
        Route::post('/resetOwner-Password', [App\Http\Controllers\OwnerController::class, 'resetOwnerPassword'])->name('owner.resetOwnerPassword');

    });


    Route::middleware(['isInvestor'])->group(function () {

        Route::get('/dashboard-investor', [App\Http\Controllers\HomeController::class, 'investorLogin'])->name('investor.dashboard');
        Route::get('/property-detail/{id}', [App\Http\Controllers\UserController::class, 'propertyDetail'])->name('investor.propertyDetail');
        Route::post('/search',  [App\Http\Controllers\UserController::class, 'search'])->name('investor.search');
        Route::post('/filter',  [App\Http\Controllers\UserController::class, 'filter'])->name('investor.filter');
        Route::get('/select-plans/{id}', [App\Http\Controllers\UserController::class, 'selectPlan'])->name('investor.selectPlan');
        Route::get('generatepdf/{id}', [App\Http\Controllers\UserController::class, 'generatePDF'])->name('investor.generatePDF');
        Route::post('/requestProvider', [App\Http\Controllers\UserController::class, 'requestProvider'])->name('investor.requestProvider');
        Route::post('/requestOwner', [App\Http\Controllers\UserController::class, 'requestOwner'])->name('investor.requestOwner');
        Route::get('/investor-profile', [App\Http\Controllers\UserController::class, 'investorProfile'])->name('investor.profile');
        Route::post('/updateInvestorProfile', [App\Http\Controllers\UserController::class, 'updateInvestorProfile'])->name('investor.updateProfile');

        Route::get('/investor-chat/{id}', [App\Http\Controllers\UserController::class, 'investorChat'])->name('investor.investorChat');
        Route::post('/send-chats', [App\Http\Controllers\UserController::class, 'sendChats'])->name('investor.sendChats');
        Route::post('/get-chats', [App\Http\Controllers\UserController::class, 'getChats'])->name('investor.getChats');
        // Route::post('/get-counts', [App\Http\Controllers\UserController::class, 'getCounts'])->name('investor.getCounts');

        Route::get('/view-all-property', [App\Http\Controllers\UserController::class, 'viewAllProperty'])->name('investor.viewAllProperty');
        Route::get('/view-requested-property', [App\Http\Controllers\UserController::class, 'viewRequestedProperty'])->name('investor.viewRequestedProperty');
        Route::get('/view-finance', [App\Http\Controllers\UserController::class, 'viewFinance'])->name('investor.viewFinance');
        Route::get('/view-requested-finance', [App\Http\Controllers\UserController::class, 'viewRequestedFinance'])->name('investor.viewRequestedFinance');

        Route::get('/change-investor-password', [App\Http\Controllers\UserController::class, 'changeInvestorPassword'])->name('investor.changeInvestorPassword');
        Route::post('/resetInvestorPassword', [App\Http\Controllers\UserController::class, 'resetInvestorPassword'])->name('investor.resetInvestorPassword');
    });

    Route::middleware(['isProvider'])->group(function () {

        Route::get('/dashboard-provider', [App\Http\Controllers\HomeController::class, 'providerLogin'])->name('provider.dashboard');
        Route::post('/postPlan', [App\Http\Controllers\ProviderController::class, 'postPlan'])->name('provider.postPlan');
        Route::get('/update-plans/{id}', [App\Http\Controllers\ProviderController::class, 'updatePlan'])->name('provider.updatePlans');
        Route::post('/editPlan', [App\Http\Controllers\ProviderController::class, 'editPlan'])->name('provider.editPlan');
        Route::post('/deletePlan/{id}', [App\Http\Controllers\ProviderController::class, 'deletePlan'])->name('provider.deletePlan');
        Route::get('/interested-invetors', [App\Http\Controllers\ProviderController::class, 'interestedInvetors'])->name('provider.interestedInvetors');
        Route::get('/potential-invetors', [App\Http\Controllers\ProviderController::class, 'potentialInvetors'])->name('provider.potentialInvetors');
        Route::get('/investor-detail/{id}', [App\Http\Controllers\ProviderController::class, 'investorDetail'])->name('provider.investorDetail');
        Route::get('/provider-profile', [App\Http\Controllers\ProviderController::class, 'providerProfile'])->name('provider.profile');
        Route::post('/updateProviderProfile', [App\Http\Controllers\ProviderController::class, 'updateProviderProfile'])->name('provider.updateProfile');
        Route::get('/provider-plan', [App\Http\Controllers\ProviderController::class, 'providerPlan'])->name('provider.plan');

        Route::get('/provider-chat/{id}', [App\Http\Controllers\ProviderController::class, 'providerChat'])->name('provider.providerChat');
        Route::post('/send-chat', [App\Http\Controllers\ProviderController::class, 'sendChat'])->name('provider.sendChat');
        Route::post('/get-chat', [App\Http\Controllers\ProviderController::class, 'getChat'])->name('provider.getChat');
        

        Route::get('/change-provider-password', [App\Http\Controllers\ProviderController::class, 'changeProviderPassword'])->name('provider.changeProviderPassword');
        Route::post('/resetProviderPassword', [App\Http\Controllers\ProviderController::class, 'resetProviderPassword'])->name('provider.resetProviderPassword');

    });


