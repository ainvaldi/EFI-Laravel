<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use sisVentas\Http\Requests\ArticuloFormRequest;
use sisVentas\Articulo;
use DB;
class ApiArticuloController extends Controller
{
    public function index(Request $request)
    {
        $articulos = DB::table('articulo as a')
        ->join('categoria as c','a.idcategoria','=','c.idcategoria')
        ->select('a.idarticulo','a.nombre','c.nombre as categoria')
        ->orderBy('a.idarticulo','desc')
        ->get();
        return $articulos;
    }
    public function store(Request $request){ 
        $articulo = new Articulo;
        $articulo ->idcategoria=$request->get('idcategoria');
        $articulo ->codigo=$request->get('codigo');
        $articulo ->nombre=$request->get('nombre');
        $articulo ->stock=$request->get('stock');
        $articulo ->descripcion=$request->get('descripcion');
        $articulo ->imagen=$request->get('imagen');
        $articulo ->estado='Activo';
        return Articulo::create($request->all());
    }    

    public function show($id)
    {   
        $articulos = DB::table('articulo as a')
        ->join('categoria as c','a.idcategoria','=','c.idcategoria')
        ->select('a.idarticulo','a.nombre','a.codigo','a.stock','c.nombre as categoria','a.descripcion','a.imagen','a.estado')
        ->where('a.idarticulo','=',$id)
        ->get();
        return $articulos;

    }

    public function update(Request $request, Articulo $articulo)
    {
        $articulo->update($request->all());  
        return $articulo;
    }

    public function destroy($id)
    {
        $articulo=Articulo::findOrFail($id);
        $articulo->estado='Inactivo';
        $articulo->update();
        return $articulo;
    }
}
