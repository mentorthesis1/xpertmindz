<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;

use App\Http\Controllers\PaymentController;


Route::get('/about',[FrontendController::class,'about']);
Route::get('/contactUs',[FrontendController::class,'contactUs']);
Route::get('/viewcourse',[FrontendController::class,'viewcourse']);
Route::get('/java',[FrontendController::class,'java']);
Route::get('/python',[FrontendController::class,'python']);
Route::get('/bigdata',[FrontendController::class,'bigdata']);
Route::get('/msoffice',[FrontendController::class,'msoffice']);
Route::get('/c',[FrontendController::class,'c']);
Route::get('/ps',[FrontendController::class,'ps']);
Route::get('/tally',[FrontendController::class,'tally']);
Route::get('/asp',[FrontendController::class,'asp']);
Route::get('/flash',[FrontendController::class,'flash']);
Route::get('/html',[FrontendController::class,'html']);
Route::get('/pgdca',[FrontendController::class,'pgdca']);
Route::get('/matlab',[FrontendController::class,'matlab']);
Route::get('/project',[FrontendController::class,'project']);
Route::get('/manpower',[FrontendController::class,'manpower']);
Route::get('/internship',[FrontendController::class,'internship']);
Route::get('/workshop',[FrontendController::class,'workshop']);
Route::get('/symposium',[FrontendController::class,'symposium']);
Route::get('/beproject',[FrontendController::class,'beproject']);











//job apply
Route::get('/job_apply_view/{id}',[FrontendController::class,'job_apply_view']);
//workshop create
Route::post('/workshop_create',[FrontendController::class,'workshop_create']);



//web design

Route::get('/web-design',[FrontendController::class,'index']);

//payment


Route::get('/payment_view',[PaymentController::class,'payment_view']);
Route::post('paymentRazor', [PaymentController::class,'paymentRazor'])->name('paymentRazor');



