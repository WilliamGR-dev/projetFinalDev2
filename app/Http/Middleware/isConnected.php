<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isConnected
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('user') != null){
            return redirect('profile');
        }
        return $next($request);
    }
}
