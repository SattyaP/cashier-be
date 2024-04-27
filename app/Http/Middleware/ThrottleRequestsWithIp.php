<?php

namespace App\Http\Middleware;

use Closure;

class ThrottleRequestsWithIp extends \Illuminate\Routing\Middleware\ThrottleRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $maxAttempts = 50, $decayMinutes = 1, $prefix = '')
    {
        if($request->ip() === "192.168.18.177")
            return $next($request);

        return parent::handle($request, $next, $maxAttempts, $decayMinutes, $prefix);
    }
}
