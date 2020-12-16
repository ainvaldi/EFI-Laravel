<?php

namespace sisVentas\Http\Middleware;

use Closure;

class Admin
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
        if(auth()->user()->tipo_usuario == 'Admin')
        {
            return $next($request);
        }

        return redirect('/ventas/venta')->with('Error', 'No tiene permisos de administrador!');
    }
}
