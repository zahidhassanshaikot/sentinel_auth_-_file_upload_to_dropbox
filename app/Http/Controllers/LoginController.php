<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class LoginController extends Controller
{
    public function login(){
        return view('authentication.login');
    }
    public function postLogin(Request $request){

        // return $request->all();
try{


    $rememberMe=false;
    if(isset($request->remamber_me)){
    $rememberMe=true;
}
        if(Sentinel::authenticate($request->all(),$rememberMe)){
            // $user=Sentinel::authenticate($request->all());
            // dd($user);
            return redirect('/');
        }else{

            return redirect()->back()->with(['error'=>'Wrong Cridential']);
        }
    }catch(ThrottlingException $e){
        $delay=$e->getDelay();
        return redirect()->back()->with(['error'=>"You are banned for $delay sec"]);
    }catch(NotActivatedException $e){
        
        return redirect()->back()->with(['error'=>"Your accout is not acctivated"]);
    }

    }
    public function logout(){
        Sentinel::logout();
        return redirect('/login');
    }
}
