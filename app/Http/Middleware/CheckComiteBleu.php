<?php

namespace App\Http\Middleware;

use Closure;

class CheckComiteBleu
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
        if (auth()->user()->droit > 5 and auth()->user()->droit != 7) {
            return redirect('/')->with('error', 'Page non autorisée');
        }

        return $next($request);
    }
}
