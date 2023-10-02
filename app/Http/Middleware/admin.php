<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Contracts\Http\Kernel;
use Closure;
use Illuminate\Support\Facades\Auth;


class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        {  if(!Auth::guard('admin')->check()){
            return redirect()->route('admin.login');
             }
             return $next($request);
        }
    }
}
