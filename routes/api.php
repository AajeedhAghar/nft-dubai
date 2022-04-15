<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiProfileController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API Profile Controller

Route::get('profiles',[ApiProfileController::class, 'index']);
Route::get("profiles/{profile}", [ApiProfileController::class, 'show']);
Route::post('profiles', [ApiProfileController::class, 'store']);
Route::put('profiles/{profile}', [ApiProfileController::class, 'update']);
Route::delete('profiles/{profile}', [ApiProfileController::class, 'delete']);

//API User Controller

Route::get('users', [UserController::class, 'index']);
