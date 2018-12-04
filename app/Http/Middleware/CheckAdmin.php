<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->check()){
            // The user is logged in...
            return redirect()->route('login');
        }else {
            $tipo = Auth()->user()->tipo;
            if($tipo=="admin"){
                return $next($request);
            }else{
                return redirect()->route('logout');
            }      
        }
    }
} 