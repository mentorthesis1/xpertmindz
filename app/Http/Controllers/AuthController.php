<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class AuthController extends Controller
{
    public function login_view(){
        return view('auth.login');
    }

    public function register_view(){
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect("/")->with('message' , 'Login successfully');
        }
        else{
            return redirect("/login_view")->with('Login details are not valid'); 
        }
       
    }


    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $name=$request->name;
        $email=$request->email;
        $password=Hash::make($request->password);

        $user =new User;
        $user->name=$name;
        $user->email=$email;
        $user->password=$password;
        $user->save();

        return redirect('/')->with('message','Register successfully');
    }
}
