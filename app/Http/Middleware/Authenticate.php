<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        if (!$request->expectsJson()) {
            // Point to your existing login route
            return route('auth.login.index');
        }
        return null;
    }
}
