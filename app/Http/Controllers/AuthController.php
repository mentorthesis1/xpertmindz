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
            'email'=>'required',
            'password'=>'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
            $user = User::where('email',$email)->first();
            Auth::login($user);
            return redirect('/');
        }else{
            return back()->withErrors(['Invalid credentials!']);
        }
    }


    public function register(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required|confirmed'

            ]
            );

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make( $request->input('password'));
        $user->save();

        Auth::login($user);

        return redirect('/login');

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }


    public function student_register(){
        return view('auth.student_register');
    }

    public function institution_register(){
        return view('auth.institution_register');
    }

    public function student_login(){
        return view('auth.student_login');
    }

    public function institution_login(){
        return view('auth.institution_login');
    }


    public function student_register_create(Request $request){
     

        $request->validate(
            [
                'name'=>'required',
                'collage_name'=>'required',
                'email'=>'required',
                'password'=>'required|confirmed'

            ]
            );

        $user = new User;
        $user->name = $request->input('name');
        $user->collage_name = $request->input('collage_name');
        $user->email = $request->input('email');
        $user->role='student';
        $user->password = Hash::make( $request->input('password'));
        $user->save();

        Auth::login($user);

        return redirect('/student_login');


    }

    public function institution_register_create(Request $request){
       
        $request->validate(
            [
                'institution_name'=>'required',
                 
                'email'=>'required',
                'password'=>'required|confirmed'

            ]
            );

        $user = new User;
        $user->institution_name = $request->input('institution_name');
       
        $user->email = $request->input('email');
        $user->role='institution';
        $user->password = Hash::make( $request->input('password'));
        $user->save();

        Auth::login($user);

        return redirect('/institution_login');

    }

    public function student_login_action(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
            $user = User::where('email',$email)->first();
            Auth::login($user);
            return redirect('/');
        }else{
            return back()->withErrors(['Invalid credentials!']);
        }
    }

    public function institution_login_action(Request $request){

        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
            $user = User::where('email',$email)->first();
            Auth::login($user);
            return redirect('/');
        }else{
            return back()->withErrors(['Invalid credentials!']);
        }
    }



}
