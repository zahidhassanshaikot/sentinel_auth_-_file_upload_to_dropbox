<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //user auth check

        //check admin or not
if(sentinel::check() && Sentinel::getUser()->roles()->first()->slug =='Admin'){
        return $next($request);
    
    }else{
    return redirect('/login');
    }
}
}
