<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        $data['title'] = 'Login';
        return view('user/login',  $data);
    }

    public function submit(Request $request)
    {
        $request->validate([    
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['username' => $request->username ,'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors('password', 'username / password salah');
    }
}
