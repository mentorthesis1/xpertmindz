<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Talk;

class ServerController extends Controller
{
    public function contact_create(Request $request){
              $request->validate([
                  'name'=>'required',
                  'email'=>'required',
                  'subject'=>'required',
                  'message'=>'required',
              ]);

              $contact= new Contact;
              $contact->name=$request->name;
              $contact->email=$request->email;
              $contact->subject=$request->subject;
              $contact->message=$request->message;
              $contact->save();


              return redirect()->back()->with('message','Reports send successfull');

    }


    public function talk_to_us(Request $request){
                 
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required'
        ]);

        $talk=new Talk;
        $talk->name=$request->name;
        $talk->email=$request->email;
        $talk->mobile=$request->mobile;
        $talk->save();

        return redirect()->back()->with('message','Our expert will give you a call shortly');
              

    }
}
