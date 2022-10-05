<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function LoginView(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' =>'required|email',
            'password' =>'required|min:4',
        ]);

        $credentials = ["email" => $request->email,"password" => $request->password];
        if(Auth::attempt($credentials)){
            Session::flash('toast',["type" => "primary","head" =>"Logged In","body" =>"Successfully logged in."]);
            return redirect()->route('admin.dashboard');
        }else{
            Session::flash('toast',["type" => "warning","head" =>"Login Failed","body" =>"Invalid Credentials"]);
            return back();
        }
    }

    public function RegisterView(){
        return view('admin.auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:4'
        ]);
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->username;
        $user->password = Hash::make($request->password);
        if($user->save()){
            Session::flash('toast',["type" => "primary","head" =>"Registered","body" =>"Successfully registered"]);
            return redirect()->route('auth.login.view');
        }
    }

    public function logout(){
        Session::flash('toast',["type" => "primary","head" =>"Logged Out","body" =>"Logged Out Successfully"]);
        Auth::logout();
        return redirect()->route('auth.login.view');
    }
}
