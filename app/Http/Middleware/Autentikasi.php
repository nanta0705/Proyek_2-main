<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Type\NullType;
use Symfony\Component\HttpFoundation\Response;

class Autentikasi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = NULL): Response
    {
        if (Auth::guard($guard)->check()) {
            return $next($request);
        }
        return redirect('/login');
    }
}
