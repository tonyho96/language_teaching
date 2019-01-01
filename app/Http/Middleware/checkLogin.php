<?php

namespace App\Http\Middleware;

use Closure;

class checkLogin
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
		if(\Auth::check())//if user has login
		{
			return $next($request);
		}
		//if user has not login
		return redirect()->route('login');
    }
}
