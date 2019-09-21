<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function validateWithJson($data=[],$rule=[]){
        $validator=validator::make($data,$rule);
        if($validator->passes()){
            return true;
        }
        return $validator->getMessageBug()->all();

    }

    protected function responseWithSuccess($message='', $data=[],$code=200){
        return response()->json([
            'success'=>true,
            'message'=>$message,
            'data'=>$data
        ],$code);
    }

    protected function responseWithError($message='', $data=[],$code=400){
        return response()->json([
            'error'=>true,
            'message'=>$message,
            'data'=>$data
        ],$code);
    }
}
