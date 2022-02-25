<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\workshop;

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
    public function project(){
        return view('frontend/projects/project');
    }
    public function manpower(){
        return view('frontend/manpower/job');
    }
    public function internship(){
        return view('frontend/internship/internships');
    }
    public function workshop(){
        return view('frontend/workshop/workshop');
    }
    public function symposium(){
        return view('frontend/symposium/symposium');
    }
    public function beproject(){
        return view('frontend/projects/beproject');
    }









































































































//workshop

public function workshop_create(Request $request){
              
   $ins_name=$request->ins_name;
   $email=$request->email;
   $phone=$request->phone;
   $workshop_topic=$request->workshop_topic;
   $workshop_date=$request->workshop_date;
   $workshop_place=$request->workshop_place;

   $data=[
       'institution_name'=>$ins_name,
       'email'=>$email,
       'phone'=>$phone,
       'workshop_topic'=>$workshop_topic,
       'workshop_date'=>$workshop_date,
       'workshop_place'=>$workshop_place
   ];

   Workshop::create($data);
   return redirect()->back()->with('message','workshop created successfully');

}




    //web design service

  public function index(){
      return view('frontend.web.index');
  }

}
