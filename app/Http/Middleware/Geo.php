<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Geo
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
        if ($request->input('enlem')=='' or $request->input('boylam')=='') {
            return redirect()->to('/qr-geo');
        }
        return $next($request);
    }
}
