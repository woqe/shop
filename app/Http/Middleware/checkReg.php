<?php

namespace App\Http\Middleware;

use App\Http\Controllers\RegisterController;
use Closure;
use App\Http\Controllers\Auth;

class checkReg
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
        $reg = new RegisterController();
        $reg->validator($request)->register($request);
        return $reg;
    }
}
