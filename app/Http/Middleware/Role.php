<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Role as Middleware;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }
    public function handle($request, Closure $next, String $role) {
        if (!Auth::check()) {
            return redirect('/home');
        }
        $user = Auth::user();
        if($user->level == $role)
          return $next($request);
    
        return redirect('/home');
      }
}
