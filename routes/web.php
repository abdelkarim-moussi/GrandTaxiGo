<?php

use App\Http\Controllers\Auth\RegistredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PassengerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth','is_driver:driver'])->group(function(){
    Route::get('/driver',[DriverController::class,'index']);
});

Route::middleware(['auth','is_passenger:passenger'])->group(function(){
    Route::get('/passenger',[PassengerController::class,'index']);
});

Route::get('/logout',[AuthenticatedSessionController::class,'logout']);

Route::middleware(['guest'])->group(function(){
    //register routes
    Route::get('/register',[RegistredUserController::class,'create']);
    Route::post('/register',[RegistredUserController::class,'store']);

    //login routes
    Route::get('/login',[AuthenticatedSessionController::class,'create']);
    Route::post('/login',[AuthenticatedSessionController::class,'login']);
});
