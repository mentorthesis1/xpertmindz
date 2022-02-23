<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;



Route::get('/dashboard',[AdminController::class,'dashboard']);

Route::get('/users',[AdminController::class,'users']);

Route::get('/reports',[AdminController::class,'reports']);