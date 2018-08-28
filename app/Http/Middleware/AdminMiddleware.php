<?php

namespace App\Http\Middleware;

use Closure;
use Response;

class AdminMiddleware
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
        if ($request->user() && $request->user()->is_admin != '1')
        {
            return redirect('/');
        }
        return $next($request);
    }
}
