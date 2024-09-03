<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;


//Register
Route::post('register', [AuthController::class, 'register']);
//login
Route::post('login', [AuthController::class, 'login']);

Route::group([
    'middleware'=> ['auth:sanctum']
], function(){
    //profile
    Route::get('profile', [AuthController::class, 'profile']);
    //logout
    Route::get('logout', [AuthController::class, 'logout']);
});
