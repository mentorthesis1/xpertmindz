<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;


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