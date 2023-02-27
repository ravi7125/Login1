<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
class Customauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "hii form middleware";
       echo $path=$request->path();
        if(($path=="login" || $path=="register") && Session::get('user'))
        {
            return redirect('signup');
        }
        return $next($request);
    }
}
