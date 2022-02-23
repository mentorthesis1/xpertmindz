<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;


Route::get('/login_view',[AuthController::class,'login_view']);
Route::get('/register_view',[AuthController::class,'register_view']);



Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);

Route::get('/logout',[AuthController::class,'logout']);


Route::get('/student_register',[AuthController::class,'student_register']);


Route::get('/institution_register',[AuthController::class,'institution_register']);

Route::get('/student_login',[AuthController::class,'student_login']);


Route::get('/institution_login',[AuthController::class,'institution_login']);


//post

Route::post('/student_register_create',[AuthController::class,'student_register_create']);


Route::post('/institution_register_create',[AuthController::class,'institution_register_create']);

Route::post('/student_login_action',[AuthController::class,'student_login_action']);


Route::post('/institution_login_action',[AuthController::class,'institution_login_action']);



