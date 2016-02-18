<?php

namespace App\Http\Middleware;

use Closure;

class EnrolmentMiddleware
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

       if ($request->input('q1') == no) {
            return redirect('hrio.manage_clients');
        }

        return $next($request);
    }
}
