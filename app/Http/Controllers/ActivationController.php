<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;

class ActivationController extends Controller
{
    public function activation($email,$activationCode){
        $user =User::whereEmail($email)->first();
        $sentinelUser=Sentinel::findById($user->id);
        // dd($sentinelUser);
        if(Activation::complete($sentinelUser,$activationCode)){
            return redirect('/login');
        }
    }
}
