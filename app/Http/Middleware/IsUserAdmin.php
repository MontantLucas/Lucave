<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsUserAdmin
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
        if(auth()->user()->isAdmin == true){
            return $next($request);
        } else{
            abort(403);
        }

    }
}
