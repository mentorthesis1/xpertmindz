<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;


Route::get('/about',[FrontendController::class,'about']);
Route::get('/contactUs',[FrontendController::class,'contactUs']);
Route::get('/viewcourse',[FrontendController::class,'viewcourse']);