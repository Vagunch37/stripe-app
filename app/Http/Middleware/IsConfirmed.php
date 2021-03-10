<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsConfirmed
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
        // if (!\Gate::allows('isConfirmed')) {
        //     return redirect()->route('login');
        // }
        // if (\Auth::check() && \Gate::allows('isConfirmed')) {
        //     return $next($request);   
        // }
        if (!\Gate::allows('isConfirmed')) {
            // return back();
            return redirect()->route('login');
        }
        
        return $next($request);
    }   
}

