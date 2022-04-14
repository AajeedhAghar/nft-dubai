<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\CurrencyController ;
use App\Http\Controllers\BusinessController ;

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
    return view('welcome1');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::controller(FacebookController::class)->group(function(){
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback', 'handleFacebookCallback');
});


Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);


Route::group(['middleware'=>'guest:web','namespace'=>'App\Http\Controllers\site'],function(){

    Route::get('create_business_profile' , 'createProfileCountroller@creteBusiness')->name('site.createBusinessProfile');
    Route::get('create_franchise_profile' , 'createProfileCountroller@creteFranchise')->name('site.createFranchiseProfile');
    Route::get('create_investor_profile' , 'createProfileCountroller@creteInvestor')->name('site.createInvestorProfile');


});





//  ************* Busnisses ***************


Route::get('businesses/create', [BusinessController::class, 'create']);
Route::post('businesses/store', [BusinessController::class, 'store']);

//  ************* Currencies ***************


Route::get('currencies/create', [CurrencyController::class, 'create']);
Route::post('currencies/store', [CurrencyController::class, 'store']);
