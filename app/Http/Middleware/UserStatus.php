<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure,Auth;

class UserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->status != "100"):
            return $next($request);
        else:
             return redirect('/logout');
        endif;
    }
}
