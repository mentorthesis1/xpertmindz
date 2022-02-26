<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\workshop;
use App\Models\Current;
use App\Models\Jobapply;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;



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
        $jobs=Current::all();
        return view('frontend/manpower/job',compact('jobs'));
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
   
    




















//job apply 

public function job_apply($id){
      $data['job']=Current::where('id',$id)->first();
    return view('frontend.manpower.job_apply',$data);
}


public function job_apply_create(Request $request){

 
              $job_title=$request->job_title;
              $name=$request->name;
              $email=$request->email;
              $phone=$request->phone;
              $job_id=$request->job_id;
              $user_id=Auth::user()->id;


              $file=$request->file('resume');

              if($file){
                $filename = time().'_'.$file->getClientOriginalName();
                $location=public_path('job/resumes');
                $file->move($location,$filename);
              }

              $data=[
                  'job_title'=>$job_title,
                  'name'=>$name,
                  'email'=>$email,
                  'phone'=>$phone,
                  'resume'=>$filename,
                  'job_id'=>$job_id,
                  'user_id'=>$user_id,
              ];

              Jobapply::create($data);
              return redirect()->back()->with('message','Job Applied');

    
          
              

}





























//profile view


public function profile_view(){
    $user_id=Auth::user()->id;
    $user_details=User::where('id',$user_id)->first();
    return view('frontend.profile.profile_page',compact('user_details'));
}

public function my_payments(){
    $user_id=Auth::user()->id;
    $payments=Payment::where('user_id',$user_id)->get();
    return view('frontend.profile.my_payments',compact('payments'));
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
