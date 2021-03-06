<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Administrator {

    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->is_admin == 1){
            return $next($request);
        }
        return redirect('/');
    }
}
