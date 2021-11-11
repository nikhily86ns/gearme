<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isProvider
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user() && auth()->user()->roles == '2'){
            return $next($request);
        }
   
        return redirect('/login')->with('error',"You don't have Provider access.");
    }
}
