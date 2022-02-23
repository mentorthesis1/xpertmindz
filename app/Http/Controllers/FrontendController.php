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
    public function viewcourse(){
        return view('frontend/services/course');
    }
    public function java(){
        return view('frontend/courses/java');
    }
    public function python(){
        return view('frontend/courses/python');
    }
    public function bigdata(){
        return view('frontend/courses/bigdata');
    }
    public function msoffice(){
        return view('frontend/courses/msoffice');
    }
    public function c(){
        return view('frontend/courses/c');
    }
    public function ps(){
        return view('frontend/courses/ps');
    }
    public function tally(){
        return view('frontend/courses/tally');
    }
    public function asp(){
        return view('frontend/courses/asp');
    }
    public function flash(){
        return view('frontend/courses/flash');
    }
    public function html(){
        return view('frontend/courses/html');
    }
    public function pgdca(){
        return view('frontend/courses/pgdca');
    }
    public function matlab(){
        return view('frontend/courses/matlab');
    }
}
