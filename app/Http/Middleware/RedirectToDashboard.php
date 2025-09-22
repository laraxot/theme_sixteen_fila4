<?php

namespace Themes\Sixteen\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectToDashboard
{
    /**
     * Handle an incoming request.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Closure(Request):Response $next
=======
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
>>>>>>> c8b07ab (.)
=======
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
>>>>>>> 0eb3291 (.)
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! Auth::guest()) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
