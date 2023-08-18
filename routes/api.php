<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\VerificationController;
use App\Http\Controllers\Api\Main\LocationController;
use App\Http\Controllers\Api\Main\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'create']);
Route::get('countries', [LocationController::class, 'countries']);
Route::get('countries/{country}/states', [LocationController::class, 'states']);
Route::post('verify', [VerificationController::class, 'verify']);
Route::post('resend', [VerificationController::class, 'resend']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('logout', [LoginController::class, 'logout']);

    Route::get('auth-user', [UserController::class, 'authUser']);
    Route::patch('auth-user/update', [UserController::class, 'updateAccount']);
    Route::put('user/update-fcm', [UserController::class, 'upateFcmToken']);
});
