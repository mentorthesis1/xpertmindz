<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[NewController::class,'index']);



use App\Http\Controllers\RazorpayController;

Route::get('paywithrazorpay', [RazorpayController::class,'payWithRazorpay'])->name('paywithrazorpay');
Route::post('payment', [RazorpayController::class,'payment'])->name('payment');

require __DIR__.'/auth.php';
require __DIR__.'/frontend.php';
require __DIR__.'/server.php';
require __DIR__.'/admin.php';