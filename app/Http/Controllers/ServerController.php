<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

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
}
