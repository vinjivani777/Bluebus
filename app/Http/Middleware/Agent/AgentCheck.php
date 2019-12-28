<?php

namespace App\Http\Middleware\Agent;

use Closure;
use Illuminate\Support\Facades\Auth;

class AgentCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! Auth::guard('agent')->check())

        return redirect()->route('agent');

        return $next($request);
    }
}
