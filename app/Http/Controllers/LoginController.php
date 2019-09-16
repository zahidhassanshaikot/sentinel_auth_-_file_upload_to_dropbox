<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login(){
        return view('authentication.login');
    }
    public function postLogin(Request $request){
        $user=Sentinel::authenticate($request->all());
        return $user;
        return view('authentication.login');
    }
}
