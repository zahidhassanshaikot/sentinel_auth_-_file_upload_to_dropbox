<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class PostController extends Controller
{
    public function createPost(Request $request ){
        $user=Sentinel::getUser();
        // if($user->hasAnyAccess(['post.create','post.update'])){
        // if($user->hasAccess('post.*')){
        if($user->hasAccess('post.create')){
            // return $request->all();
            abort(403,'Unathorize Access');
        }else{
            return 'hi';
        }
    }
}
