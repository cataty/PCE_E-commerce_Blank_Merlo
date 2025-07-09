<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->id === 1) {
            return $next($request);
        }

        Session::flash('feedback.message', 'No tenés permisos para acceder a esta página.');
        Session::flash('feedback.type', 'danger');
        return redirect()->route('home'); // Redirige a la vista home.blade.php
    }
}