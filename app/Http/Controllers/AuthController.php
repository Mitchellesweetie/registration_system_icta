<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }
    public function authlogin(Request $request){
        $this->validate($request,[
          'email'=>'required|email',
          'password'=>'required'
        ]);
        $user = User::where('email', $request->email)->first();
        // $user = User::where('email', $request->email)->first();
  
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Invalid OTP']);
        }
    
        Auth::login($user);
    
        return redirect()->route('index');
  
  
      }
    public function register(){
        return view('auth.register');
    }
    public function authregister(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:200',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|same:confirm_password',
            'confirm_password' => 'required|min:6'
        ]);
    
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
    
        return redirect('/login')->with('success', 'Account created. Please log in.');
    }
    
    public function forgetpassword(){
        return view('auth.forgetpasswrd');
    }
  

}
