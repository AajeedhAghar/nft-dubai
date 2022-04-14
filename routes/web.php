<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\CurrencyController ;
use App\Http\Controllers\FranchiseController ;
use App\Http\Controllers\BusinessController ;
use App\Http\Controllers\InvestorController ;

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





//  ************* Busnisses ***************
 

Route::get('businesses/create', [BusinessController::class, 'create']);
Route::post('businesses.store', [BusinessController::class, 'store'])->name('businesses.store');


//  ************* Franchises ***************

Route::get('franchises/create', [FranchiseController::class, 'create']);
Route::post('franchises/store', [FranchiseController::class, 'store'])->name('franchises.store');


//  ************* Investor ***************

Route::get('investors/create', [InvestorController::class, 'create']);
Route::post('investors/store', [InvestorController::class, 'store'])->name('investors.store');


//  ************* Currencies ***************
 

Route::get('currencies/create', [CurrencyController::class, 'create']);
Route::post('currencies/store', [CurrencyController::class, 'store'])->name('currencies.store');