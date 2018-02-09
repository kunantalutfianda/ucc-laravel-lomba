<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    function login(Request $request){
        $username = $request->input ('username');
        $password = $request->input ('password');

      //  return $username . " " . $password;
      if (Auth::attempt(['name' => $username, 'password' => $password])) {
        // Authentication passed...
        return redirect()->intended('dashboard');
      }else{
       
        return 'username atau password salah';
           }
     }

     function register(Request $request){
        $username = $request->input ('username');
        $email = $request->input ('email');
        $password = $request->input ('password');
        $confirm_password = $request->input ('confirm_password');

        $data = User::where('name', $username)->first();
        if($data != null){
            
            return"<script> alert('username Anda sudah ada yang punya');</script>";
        }

        $data = User::where('email', $email)->first();
        if($data != null){
             
            return"<script> alert('email Anda sudah ada yang punya');</script>";
        }

        if ($password != $confirm_password){
            return view('/register');
        }

        $user = new User();
        $user->name = $username;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        Auth::loginUsingId($user->id);

      return redirect('/dashboard');
    
     }
}

