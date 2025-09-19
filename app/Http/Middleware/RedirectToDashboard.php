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
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
=======
     * @param Closure(Request):Response $next
>>>>>>> 7401ccb (.)
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! Auth::guest()) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
