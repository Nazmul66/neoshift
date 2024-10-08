<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if( Auth::check() ){
            if( Auth::user()->role == 1 ){
                return $next($request);
            }
            else{
                // return redirect()->route('admin.login');
                return redirect('/admin/login');
            }
        }
        else{
            return redirect('/admin/login');
        }
    }
}
