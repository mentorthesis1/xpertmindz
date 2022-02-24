<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;



Route::get('/dashboard',[AdminController::class,'dashboard']);

Route::get('/users',[AdminController::class,'users']);

Route::get('/reports',[AdminController::class,'reports']);

Route::get('/talk',[AdminController::class,'talk']);

Route::get('/current_openning',[AdminController::class,'current_openning']);
Route::get('/add_current_openning_view',[AdminController::class,'add_current_openning_view']);

Route::post('/create_current_openning',[AdminController::class,'create_current_openning']);
