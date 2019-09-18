<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use Mail;

class RegistrationController extends Controller
{
    public function register(){

        return view('authentication.register');
    }
    public function postRegister(Request $request){
        $user= Sentinel::register($request->all());
        // $user= Sentinel::registerAndActivate($request->all());
        $activation=Activation::create($user);
         $role=Sentinel::findRoleBySlug('Admin');
         $role->users()->attach($user);
        $this->sendMail($user,$activation->code);
        // dd($user);
        return \redirect('/login')->with('success','Check your mail for active your account.');
    }
    private function sendMail($user,$code){
        Mail::send('email.activation',[
            'user'=>$user,
            'code'=>$code
        ],function($message) use ($user){
            $message->to($user->email);
            $message->subject(" Hello $user->first_name active your account");
        });

    }
 
}
