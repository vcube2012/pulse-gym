<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Config;
class TrailingSlashes
{

    public function handle($request, Closure $next)
    {

        if (!preg_match('/.+\/$/', $request->getRequestUri())) {
            dd($request->getRequestUri().'/');
            return Redirect::to($request->getRequestUri().'/', 301);
        }
        return $next($request);
    }
}
