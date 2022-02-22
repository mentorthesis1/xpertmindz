<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;


Route::get('/login_view',[AuthController::class,'login_view']);
Route::get('/register_view',[AuthController::class,'register_view']);