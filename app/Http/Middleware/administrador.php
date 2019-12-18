<?php

namespace App\Http\Middleware;

use Closure;

class administrador
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
      if(\Auth::user() && \Auth::user()->administrador){
        return $next($request);
    }
        return redirect("/");
    }
}
