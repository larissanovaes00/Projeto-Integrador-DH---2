<?php

namespace App\Http\Middleware;

use Closure;

class userType
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
        if (!auth()->check()) {
            return redirect('/acesso');
        }
        
        if(auth()->user()->tipoUsuario() == 1) {
            return $next($request);
        }

        return redirect('home');
    }
}
