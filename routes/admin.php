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

Route::get('/edit_current_openning/{id}',[AdminController::class,'edit_current_openning']);
Route::post('/update_current_openning',[AdminController::class,'update_current_openning']);
Route::get('/delete_current_openning/{id}',[AdminController::class,'delete_current_openning']);

//workshop

Route::get('/workshop_view',[AdminController::class,'workshop_view']);


//paymet details

Route::get('/payment_details',[AdminController::class,'payment_details']);

//resumes

Route::get('/resumes/{id}',[AdminController::class,'resumes']);





