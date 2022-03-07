<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;



Route::get('/dashboard',[AdminController::class,'dashboard'])->middleware('auth');

Route::get('/users',[AdminController::class,'users'])->middleware('auth');

Route::get('/reports',[AdminController::class,'reports'])->middleware('auth');

Route::get('/talk',[AdminController::class,'talk'])->middleware('auth');

Route::get('/current_openning',[AdminController::class,'current_openning'])->middleware('auth');
Route::get('/add_current_openning_view',[AdminController::class,'add_current_openning_view'])->middleware('auth');

Route::post('/create_current_openning',[AdminController::class,'create_current_openning'])->middleware('auth');

Route::get('/edit_current_openning/{id}',[AdminController::class,'edit_current_openning'])->middleware('auth');
Route::post('/update_current_openning',[AdminController::class,'update_current_openning']);
Route::get('/delete_current_openning/{id}',[AdminController::class,'delete_current_openning'])->middleware('auth');

//workshop

Route::get('/workshop_view',[AdminController::class,'workshop_view'])->middleware('auth');


//paymet details

Route::get('/payment_details',[AdminController::class,'payment_details'])->middleware('auth');

//resumes

Route::get('/resumes/{id}',[AdminController::class,'resumes'])->middleware('auth');





