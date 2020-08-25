<?php

namespace App\Http\Middleware;

use Closure;
use DB;

use Illuminate\Support\Facades\Auth;

class CheckFrontend
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
        if (Auth::user()->name == "Designer") {

            return $next($request);
        }
        return redirect('home');
    }
}
