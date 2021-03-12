<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CORS
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
        header('Acces-Controll-Allow-Origin : *');
        header('Acces-Controll-Allow-Origin : Content-Type ,X-Auth-Token , Authorisation , Origin');
        return $next($request);
    }
}
