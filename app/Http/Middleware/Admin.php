<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * 1 = Admin
     */
    public function handle($request, Closure $next)
    {
        $data = [
            'email' => Auth::user()->email,
            'name' => Auth::user()->name,
            'id_user_role' => Auth::user()->id_user_role
        ];
        // dd($data);
        // dd(Auth::user()->id_user_role);
        if (Auth::check() && Auth::user()->id_user_role == 1) {
            return $next($request);
        }
        return redirect('/');
    }
}
