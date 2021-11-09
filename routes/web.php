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
});

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

// Route::group(['middleware' => 'isAdmin'], function(){

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


// Route::group(['middleware' => 'isOwner'], function(){
    Route::middleware(['isOwner'])->group(function () {

        Route::get('/dashboardOwner', [App\Http\Controllers\HomeController::class, 'ownerLogin'])->name('owner.dashboard');
        Route::get('/submitProperty', [App\Http\Controllers\UserController::class, 'submitProperty'])->name('owner.submitProperty');
        Route::post('/postProperty', [App\Http\Controllers\UserController::class, 'postProperty'])->name('owner.property');
        Route::get('/viewOwnerProperty/{id}', [App\Http\Controllers\UserController::class, 'viewProperty'])->name('owner.viewProperty');
        Route::post('/deleteProperty/{id}', [App\Http\Controllers\UserController::class, 'deleteProperty'])->name('owner.deleteProperty');
        Route::get('/updateProperty/{id}', [App\Http\Controllers\UserController::class, 'updateProperty'])->name('owner.updateProperty');
        Route::post('/editProperties', [App\Http\Controllers\UserController::class, 'editProperties'])->name('owner.editProperties');
        Route::get('/propertyDetailOwner/{id}', [App\Http\Controllers\UserController::class, 'propertyDetailOwner'])->name('investor.propertyDetailOwner');

        Route::get('/ownerProfile', [App\Http\Controllers\UserController::class, 'ownerProfile'])->name('owner.profile');
        Route::post('/updateOwnerProfile', [App\Http\Controllers\UserController::class, 'updateOwnerProfile'])->name('owner.updateProfile');
        Route::get('/changeOwnerPassword', [App\Http\Controllers\UserController::class, 'changeOwnerPassword'])->name('owner.changeOwnerPassword');
        Route::post('/resetOwnerPassword', [App\Http\Controllers\UserController::class, 'resetOwnerPassword'])->name('owner.resetOwnerPassword');

    });

// Route::group(['middleware' => 'isInvestor'], function(){
    Route::middleware(['isInvestor'])->group(function () {

        Route::get('/dashboardInvestor', [App\Http\Controllers\HomeController::class, 'investorLogin'])->name('investor.dashboard');
        Route::get('/propertyDetail/{id}', [App\Http\Controllers\UserController::class, 'propertyDetail'])->name('investor.propertyDetail');
        Route::post('/search',  [App\Http\Controllers\UserController::class, 'search'])->name('investor.search');
        Route::post('/filter',  [App\Http\Controllers\UserController::class, 'filter'])->name('investor.filter');
        Route::get('/selectPlans/{id}', [App\Http\Controllers\UserController::class, 'selectPlan'])->name('investor.selectPlan');
        Route::get('generatepdf/{id}', [App\Http\Controllers\UserController::class, 'generatePDF'])->name('investor.generatePDF');
        Route::post('/requestProvider', [App\Http\Controllers\UserController::class, 'requestProvider'])->name('investor.requestProvider');
        Route::get('/investorProfile', [App\Http\Controllers\UserController::class, 'investorProfile'])->name('investor.profile');
        Route::post('/updateInvestorProfile', [App\Http\Controllers\UserController::class, 'updateInvestorProfile'])->name('investor.updateProfile');
        Route::post('/resetInvestorPassword', [App\Http\Controllers\UserController::class, 'resetInvestorPassword'])->name('investor.resetInvestorPassword');
    });


// Route::group(['middleware' => 'isProvider'], function(){
    Route::middleware(['isProvider'])->group(function () {

        Route::get('/dashboardProvider', [App\Http\Controllers\HomeController::class, 'providerLogin'])->name('provider.dashboard');
        Route::post('/postPlan', [App\Http\Controllers\UserController::class, 'postPlan'])->name('provider.postPlan');
        Route::get('/updatePlans/{id}', [App\Http\Controllers\UserController::class, 'updatePlan'])->name('provider.updatePlans');
        Route::post('/editPlan', [App\Http\Controllers\UserController::class, 'editPlan'])->name('provider.editPlan');
        Route::post('/deletePlan/{id}', [App\Http\Controllers\UserController::class, 'deletePlan'])->name('provider.deletePlan');
        Route::get('/interestedInvetors', [App\Http\Controllers\UserController::class, 'interestedInvetors'])->name('provider.interestedInvetors');
        Route::get('/potentialInvetors', [App\Http\Controllers\UserController::class, 'potentialInvetors'])->name('provider.potentialInvetors');
        Route::get('/investorDetail/{id}', [App\Http\Controllers\UserController::class, 'investorDetail'])->name('provider.investorDetail');
        Route::get('/providerProfile', [App\Http\Controllers\UserController::class, 'providerProfile'])->name('provider.profile');
        Route::post('/updateProviderProfile', [App\Http\Controllers\UserController::class, 'updateProviderProfile'])->name('provider.updateProfile');
        Route::post('/resetProviderPassword', [App\Http\Controllers\UserController::class, 'resetProviderPassword'])->name('provider.resetProviderPassword');

    });


