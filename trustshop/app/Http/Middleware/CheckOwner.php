<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckOwner
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role !== 'owner') {
            return redirect()->route('root');
        }

        return $next($request);
    }
}
