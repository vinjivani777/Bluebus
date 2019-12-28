<?php

namespace App\Http\Middleware\Vendor;

use Closure;
use Illuminate\Support\Facades\Auth;

class VendorCheck
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
        if (! Auth::guard('vendor')->check())

        return redirect()->route('vendor');

        return $next($request);
    }
}
