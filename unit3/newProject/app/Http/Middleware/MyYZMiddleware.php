<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MyYZMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //set constraints here
        $age=$request->query('age');
        if(!$age || $age<19){
            return response("Sorry, you are student, unauthorized");
        }
        return $next($request);
    }
}
