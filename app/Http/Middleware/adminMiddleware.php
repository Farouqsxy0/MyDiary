<?php

namespace App\Http\Middleware;

use Closure;

class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard =null)
    {
        if(auth::check())
        {
            if($request->user()->role =='Admin'){
                return $next($request);
            }
            return redirect('/home');
        }
        return redirect('/home');
    }
}
