<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class Developer
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

        if(!Auth::check()) {
            return redirect()->route('/login');
        }
        if(Auth::user()->role == 'developer') {
            return $next($request);
        }
        if(Auth::user()->role == 'manager') {
            return redirect('/manager');
        }
        if(Auth::user()->role == 'admin') {
            return redirect('/admin');
        }
    }
}
