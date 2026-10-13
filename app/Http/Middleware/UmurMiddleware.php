<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $umur = 17;

        if ($umur >= 18) {
            return $next($request);
        }

        return back()->with('fail', 'Umur kamu belum cukup');

    }
}
