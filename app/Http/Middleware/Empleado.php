<?php

namespace sisVentas\Http\Middleware;

use Closure;

class Empleado
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
        if(auth()->user()->tipo_usuario == 'Empleado')
        {
            return $next($request);
        }

        return redirect('/ventas/venta')->with('Error', 'No tiene permisos de administrador!');
    }
}
