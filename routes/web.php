<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// auth route
Route::get('/login',[AuthController::class, 'login']);
Route::get('/loginSubmit',[AuthController::class, 'loginSubmit']);
Route::get('/logout',[AuthController::class, 'logout']);