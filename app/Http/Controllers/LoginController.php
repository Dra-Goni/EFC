<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function inicio()
    {
        return view('login.login');
    }

    
    public function login(Request $request)
    {
  
        $userdata = array(
            'USU_MAIL'     => $request->correo,
            'password'  =>   $request->password
        );
    
         
         if (Auth::attempt($userdata)) {
             return redirect('/');
        }else{
         
             return redirect('/login')->with('popup', 'open');
         
         }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
