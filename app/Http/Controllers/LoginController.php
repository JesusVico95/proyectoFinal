<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'email'=>'required',
            'password' => 'required'
        ]);

        $user = new User();

        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request -> password);

        $user->save();

        Auth::login($user);

        return view('auth.login');
    } 
    
    public function login(Request $request){
        
        $credential =[
            "email" => $request -> email,
            "password" => $request -> password,
        ];

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return view('auth.calendario');
        }else{
            return view('auth.login');
        }
    }   

    public function logout(Request $request){     
        Auth::logout();
        
        $request -> session()->invalidate();
        $request -> session()->regenerateToken();

        return view('auth.login');
    }   
}
