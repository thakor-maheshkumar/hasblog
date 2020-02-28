<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Usermiddleware
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
        if(Auth::user()->roll=='user')
        {
            return $next($request);    
        }
        return redirect('home');
        
    }
}
