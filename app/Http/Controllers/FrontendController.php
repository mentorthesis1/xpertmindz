<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function contactUs(){
        return view('frontend/contactUs');
    }
    public function about(){
        return view('frontend/about');
    }
}
