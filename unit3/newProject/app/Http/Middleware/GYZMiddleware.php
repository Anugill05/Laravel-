<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GYZMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle($request, Closure $next)
{
    $age = $request->query('age');

    if ($age < 18) {
        return response("Sorry, Middleware activated, not allowed");
    }

    return $next($request);
}
}
