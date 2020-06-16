<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Gudang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * 3 Gudang
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->id_user_role == 3) {
            return $next($request);
        }
        return redirect('/');
    }
}
