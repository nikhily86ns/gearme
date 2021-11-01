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

        Route::get('/owners', [App\Http\Controllers\AdminController::class, 'viewOwners'])->name('admin.owners');
        Route::get('/deleteOwner', [App\Http\Controllers\AdminController::class, 'deleteOwner'])->name('admin.deleteOwner');
        Route::get('/updateOwner/{id}', [App\Http\Controllers\AdminController::class, 'updateOwner'])->name('admin.updateOwner');
        Route::post('/editOwner', [App\Http\Controllers\AdminController::class, 'editOwner'])->name('admin.editOwner');

        Route::get('/investors', [App\Http\Controllers\AdminController::class, 'viewInvestors'])->name('admin.investors');
        Route::get('/deleteInvestor', [App\Http\Controllers\AdminController::class, 'deleteInvestor'])->name('admin.deleteInvestor');
        Route::get('/updateInvestor/{id}', [App\Http\Controllers\AdminController::class, 'updateInvestor'])->name('admin.updateInvestor');
        Route::post('/editInvestor', [App\Http\Controllers\AdminController::class, 'editInvestor'])->name('admin.editInvestor');
        Route::post('/updateInvestorStatus', [App\Http\Controllers\AdminController::class, 'updateInvestorStatus'])->name('admin.updateInvestorStatus');

        Route::get('/providers', [App\Http\Controllers\AdminController::class, 'viewProviders'])->name('admin.providers');
        Route::get('/deleteProvider', [App\Http\Controllers\AdminController::class, 'deleteProvider'])->name('admin.deleteProvider');
        Route::get('/updateProvider/{id}', [App\Http\Controllers\AdminController::class, 'updateProvider'])->name('admin.updateProvider');
        Route::post('/editProvider', [App\Http\Controllers\AdminController::class, 'editProvider'])->name('admin.editProvider');
    });

// Route::group(['middleware' => 'isOwner'], function(){
    Route::middleware(['isOwner'])->group(function () {

        Route::get('/dashboardOwner', [App\Http\Controllers\HomeController::class, 'ownerLogin'])->name('owner.dashboard');
        Route::post('/postProperty', [App\Http\Controllers\UserController::class, 'postProperty'])->name('owner.property');

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

    });


