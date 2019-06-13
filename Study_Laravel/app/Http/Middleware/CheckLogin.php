<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
class CheckLogin
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
          if (!Auth::check() && $request->path()!='login'){
            return redirect()->route('login');
          }elseif (Auth::check() && $request->path()=='login'){
            return redirect()->route('home');
          }
        return  $next($request);
    }
}
