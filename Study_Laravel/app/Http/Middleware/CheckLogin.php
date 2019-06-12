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
          $response = $next($request);
          // if (!Auth::check() && $request->path()!='login'){
          //   return redirect()->route('login');
          // }
        return $response;
    }
}
