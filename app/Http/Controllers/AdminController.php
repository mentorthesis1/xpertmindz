<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Talk;
use App\Models\Current;
use App\Models\workshop;
use App\Models\Payment;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function users(){
        $users=User::all();
        return view('admin.user', compact('users'));
    }

    public function reports(){
        $reports=Contact::all();
        return view('admin.reports',compact('reports'));  
    }

    public function talk(){
        $talks=Talk::all();
        return view('admin.talk',compact('talks'));
    }
 

    public function current_openning(){
        $current=Current::all();
        return view('admin.current_openning',compact('current'));
    }

    public function add_current_openning_view(){
         return view('admin.add_current_openning');
    }

    public function create_current_openning(Request $request){
            $request->validate([
                'job_title'=>'required',
                'salary'=>'required',
                'location'=>'required',
                'quali'=>'required',
                'exp'=>'required',
           
                'job_des'=>'required'

            ]);

            $job_title=$request->job_title;
            $salary=$request->salary;
            $location=$request->location;
            $quali=$request->quali;
            $exp=$request->exp;
        
            $job_des=$request->job_des;
              
            $data=[
                'job_title'=>$job_title,
                'salary'=>$salary,
                'location'=>$location,
                'qualification'=>$quali,
                'experience'=>$exp,
          
                'job_description'=>$job_des
            ];
            
            Current::create($data);
            return redirect()->back()->with('message','job created successfully');
    }

   public function edit_current_openning($id){
         $data['key']=Current::where('id',$id)->first();
        return view('admin.edit_current_openning',$data);
   }


    public function update_current_openning(Request $request){
      $id=$request->id;
        $job_title=$request->job_title;
        $salary=$request->salary;
        $location=$request->location;
        $quali=$request->quali;
        $exp=$request->exp;
        $last_date=$request->last_date;
        $job_des=$request->last_date;
          
        $data=[
            'job_title'=>$job_title,
            'salary'=>$salary,
            'location'=>$location,
            'qualification'=>$quali,
            'experience'=>$exp,
            'last_date'=>$last_date,
            'job_description'=>$job_des
        ];
        
        Current::where('id',$id)->update($data);
        return redirect()->back()->with('message','Update successfully');
}



public function delete_current_openning($id){
       Current::where('id',$id)->delete();
       return redirect()->back()->with('message','Deleted');

}


//workshop

public function workshop_view(){
   $workshop=Workshop::all();
   return view('admin.workshop',compact('workshop'));
}


public function payment_details(){
    $payments=Payment::all();
    return view('admin.payment_details',compact('payments'));
}

}
