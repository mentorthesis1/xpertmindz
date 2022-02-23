<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;

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
}
