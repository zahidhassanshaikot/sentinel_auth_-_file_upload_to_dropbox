<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use Mail;
use Reminder;

class ForgotPasswordController extends Controller
{
    public function forgotPassword(){
        return view('authentication.forgot-password');
    }

    public function postForgotPassword( Request $request){
        $user=User::whereEmail($request->email)->first();
        $sentinelUser=Sentinel::findById($user->id);
        // return $user;
        // if(count($user)==0){
        //     return redirect()->back()->with([
        //         'success'=>'Reset Code is send to your mail',
        //     ]);
        // }
        $remainder=Reminder::exists($sentinelUser) ?: Reminder::create($sentinelUser);
        $this->sendMail($user,$remainder->code);
        // return $request->email;
        return redirect()->back()->with([
            'success'=>'Reset Code is send to your mail',
        ]);
    }
    private function sendMail($user,$code){
        Mail::send('email.forgot-password',[
            'user'=>$user,
            'code'=>$code
        ],function($message) use ($user){
            $message->to($user->email);
            $message->subject(" Hello $user->first_name Your password reset code");
        });

    }
    public function resetPassword($email,$resetCode){
        $user=User::whereEmail($email)->first();
        $sentinelUser=Sentinel::findById($user->id);
        if($reminder=Reminder::exists($sentinelUser,$resetCode)){
        
                return view('authentication.reset-password');
            
        }else{
            return redirect('/login');
        }

    }
}
