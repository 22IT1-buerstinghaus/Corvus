<?php

namespace App\Http\Middleware;

use Closure;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware extends Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  string  ...$guards
     *
     * @throws AuthorizationException
     */
    public function handle($request, Closure $next, ...$guards): mixed
    {
        if (! Auth::check() || ! Auth::user()->is_admin) {
            Auth::logout();
            throw new AuthorizationException('You are not authorized to access this page.', '403');
        }

        $this->authenticate($request, $guards);

        return $next($request);
    }
}
