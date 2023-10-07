<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('user')) {
            return $next($request);
        }
            

        return response()-> view('user.userlogin');
        //return redirect()->route('adminlogin')->with('message', 'Please login to access the admin dashboard.');
    }
}
