<?php

namespace App\Http\Middleware;

use Closure;

class ApiCsrfMiddleware
{
    public function handle($request, Closure $next)
    {
        // Exclude CSRF protection for API routes
        return $next($request)->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
    }
}
