<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> 25694758c067ab0abc41ec5ccb6e458c6742b00b

class UserVerify
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
<<<<<<< HEAD
        if(Auth::user()->id_tipo!=2)
            return redirect("home");
=======

        // php artisan make:middleware UserVerify
        if(Auth::user()->id_tipo!=1)
            return redirect("home");

>>>>>>> 25694758c067ab0abc41ec5ccb6e458c6742b00b
        return $next($request);
    }
}
