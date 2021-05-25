<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Mail
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('email') =='' or $request->input('subject')=='' ) {
            return redirect()->to('/qr-mail');
        }
        return $next($request);
    }
}
