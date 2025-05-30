<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class BendaharaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        // check role
        if(Auth::user()->role !== 'bendahara') {
            return redirect()->route('employee.dashboard')->with('message', 'Selamat datang karyawan tercintaa');
        }
        return $next($request);
    }
}
