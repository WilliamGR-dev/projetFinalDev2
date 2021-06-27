<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
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
        if (session()->has('user')){
            if (session('user')->is_admin == 0){
                return redirect('profile');
            }
        }
        else{
            return redirect('profile');
        }
        return $next($request);
    }
}
