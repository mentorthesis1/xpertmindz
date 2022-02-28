<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Talk;
use App\Mail\ContactMail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


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


              $details=[
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message,
              ];
      
    
               // Mail::to('info@freesource.in')->send(new ContactMail($details));
                Mail::to('php.mentorthesis@gmail.com')->send(new ContactMail($details));
            




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
        $talk->requirement= $request->req;
        $talk->mobile=$request->mobile;
        $talk->save();

        return redirect()->back()->with('message','Our expert will give you a call shortly');
              

    }
}
