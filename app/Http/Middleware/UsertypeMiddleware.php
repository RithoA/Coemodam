<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UsertypeMiddleware
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

        if (!Auth::guest()){
            if (Auth::user()->user_type =='ADMIN')
            {
                return redirect('/admin');
            
            }

            elseif(Auth::user()->user_type =='HRIO')
            {
               return redirect('/hrio');
            }
            
            else{
                return redirect('/cem');
            }
        }
            

        return redirect('/');
        
    }
}
