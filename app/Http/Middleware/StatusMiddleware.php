<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class StatusMiddleware
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
        if(Auth::user()->status == 0)
        {
            Auth::logout();
            return redirect('/login')->with('error', 'Your account is not verified');
        }
        else if(Auth::user()->status == 2) {
            Auth::logout();
            return redirect('/login')->with('error', 'Your account is blocked');
        } 
        else {
            return $next($request);

        }
    }
}
