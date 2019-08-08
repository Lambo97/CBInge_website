<?php

namespace App\Http\Middleware;

use Closure;

class CheckBaptise
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
        if (auth()->user()->droit > 6) {
            return redirect('/')->with('error', 'Page non autorisée');
        }

        return $next($request);
    }
}
