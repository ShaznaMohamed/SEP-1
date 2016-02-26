<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Administrator {

    // public function handle(Request $request, Closure $next)
    // {
    //   if ($request->User()->isAdmin==1) {
    //       return redirect('/');
    //   }
    //   return $next($request);
    // }

    public function handle(Request $request, Closure $next)
    {
        if (!$request->user() || !$request->user()->isAdmin()) {
            return redirect('/');
        }
        return $next($request);
    }
}
