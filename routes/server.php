<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServerController;


Route::post('/contact_create',[ServerController::class,'contact_create']);