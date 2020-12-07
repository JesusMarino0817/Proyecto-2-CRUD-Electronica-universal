<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EsMayor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if( \Auth::user()->id > 1){
            return redirect('/inicio')->with(['mensaje'=> 'Solo el administrador (ID 1) tiene acceso al inventario']);
        }
        return $next($request);
    }
}
