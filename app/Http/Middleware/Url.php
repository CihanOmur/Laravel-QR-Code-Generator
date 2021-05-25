<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Url
{

    public function handle(Request $request, Closure $next)
    {
        if ($request->input('url-text')=='') {
            return redirect()->to('/qr-url');
        }
        return $next($request);
    }
}
