<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(){
        return view('layouts/BasePage');
    }
    public function login(){
        return view('layouts/login');
    }
    public function register(){
        return view('layouts/register');
    }
    public function contactUs(){
        return view('frontend/contactUs');
    }
    public function about(){
        return view('frontend/about');
    }
}
