<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BrainMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $name=$request->query('name');
        $cname=$request->query('cname');
        // if($name!="anu" || $cname!="kaithal"){
        //     return response("unauthorized");
        // }
        return $next($request);
    }
}
