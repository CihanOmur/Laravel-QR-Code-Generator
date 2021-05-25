<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Vcard
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
        if ($request->input('email') =='' or $request->input('name')=='' or $request->input('surname')=='' ) {
            return redirect()->to('/qr-vcard');
        }
        return $next($request);
    }
}
