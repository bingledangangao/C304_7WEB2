<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
=======

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Faces\Hash;
>>>>>>> 0fc10bda9988c99dfee222f1197b8678e1dbed18
use App\Models\User;

class AuthController extends Controller
{
    function showRegister(){
        return view('authentication.register');
    }

<<<<<<< HEAD
    function showLogin(){
        return view('authentication.login');
    }

=======
    function showlogin(){
        return view('authentication.login');
    }
>>>>>>> 0fc10bda9988c99dfee222f1197b8678e1dbed18
    function register(Request $request){
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users',
<<<<<<< HEAD
            'password'  => 'required|min:6|confirmed|'
        ]);
=======
            'password'  => 'required|min:6|confirmed'
        ]);


>>>>>>> 0fc10bda9988c99dfee222f1197b8678e1dbed18
        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);

<<<<<<< HEAD
        return redirect()->route('login.form')->with('success','Registration 
        Successfull Yipy!!');
    }

    function login(Request $request){
        

    }
    
}
=======
        return redirect()->route('login.form')->with('success','Registration successful!');
    }
    function login(Request $request){

    }
}
>>>>>>> 0fc10bda9988c99dfee222f1197b8678e1dbed18
