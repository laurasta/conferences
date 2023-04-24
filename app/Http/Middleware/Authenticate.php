<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//class Authenticate extends Middleware
//{
//    /**
//     * Get the path the user should be redirected to when they are not authenticated.
//     */
//    protected function redirectTo(Request $request): ?string
//    {
//        return $request->expectsJson() ? null : route('login');
//    }
//}
class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$guards
     * @return mixed
     */
    public function handle($request, Closure|\Closure $next, ...$guards)
    {
        if ($this->authenticate($request, $guards) === false) {
            return $request->expectsJson()
                ? response()->json(['message' => 'Unauthenticated.'], 401)
                : redirect()->guest(route('login'));
        }

        return $next($request);
    }
}


