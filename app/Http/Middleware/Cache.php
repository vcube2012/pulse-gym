<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;

class Cache
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $cache = \Illuminate\Support\Facades\Cache::get($request->fullUrl());
        if (is_null($cache)) {
            $result = $next($request);
            if ($result->status() == 200 or $result->status() == 400) {
                \Illuminate\Support\Facades\Cache::put($request->fullUrl(), $result , now()->addMinutes(60));
            }
            return $result;
        }
        return $cache;

    }
}
