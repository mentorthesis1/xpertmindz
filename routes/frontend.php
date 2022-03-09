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
Route::get('/meproject',[FrontendController::class,'meproject']);

//slider

Route::get('/course_slider',[FrontendController::class,'course_slider']);

Route::get('/manpower_slider',[FrontendController::class,'manpower_slider']);

Route::get('/manpower_slider',[FrontendController::class,'manpower_slider']);

Route::get('/webdesign_slider',[FrontendController::class,'webdesign_slider']);

Route::get('/hero',[FrontendController::class,'hero']);


Route::get('/meproject',[FrontendController::class,'meproject']);


















Route::get('/profile_view',[FrontendController::class,'profile_view']);
Route::get('/my_payments',[FrontendController::class,'my_payments']);

















//job apply
Route::get('/job_apply/{id}',[FrontendController::class,'job_apply']);
//workshop create
Route::post('/workshop_create',[FrontendController::class,'workshop_create']);


Route::post('/job_apply_create',[FrontendController::class,'job_apply_create']);



//web design

Route::get('/web-design',[FrontendController::class,'index']);

//payment

use App\Http\Controllers\RazorpayController;

Route::get('paywithrazorpay/{req}', [RazorpayController::class,'payWithRazorpay'])->name('paywithrazorpay');
Route::get('default_payment', [RazorpayController::class,'default_payment']);
Route::post('payment', [RazorpayController::class,'payment'])->name('payment');






