<?php

namespace App\Http\Middleware;

use Closure;

class ApiRates
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
        if (!$request->get('ip')) {
            return response()->json(['error' => 1, 'code' => '400', 'message' => 'Отсутствует обязательный параметр – id']);
        }

        return $next($request);
    }
}
