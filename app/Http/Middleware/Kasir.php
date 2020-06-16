<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Kasir
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * 2 = Kasir
     */
    public function handle($request, Closure $next)
    {
        $data = [
            'email' => Auth::user()->email,
            'name' => Auth::user()->name,
            'id_user_role' => Auth::user()->id_user_role
        ];
        // dd($data);
        if (Auth::check() && Auth::user()->id_user_role == 2) {
            return $next($request);
        }
        return redirect('/');
    }
}
