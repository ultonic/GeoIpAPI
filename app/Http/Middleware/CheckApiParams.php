<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckApiParams
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
        if (!$request->get('ip')) {
            return response()->json(['error' => 1, 'error_code' => 'Invalid parameters', 'message' => 'Отсутствует обязательный параметр – ip']);
        }

        return $next($request);
    }
}
