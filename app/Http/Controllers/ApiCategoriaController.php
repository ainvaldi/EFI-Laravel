<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;

use sisVentas\Categoria;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\CategoriaFormRequest;
use DB;


class ApiCategoriaController extends Controller
{
    public function index(){

        $categorias = DB::table('categoria as c')
        ->select('c.idcategoria','c.nombre')
        ->where('condicion','=','1')
        ->orderBy('idcategoria','desc')
        ->get();
        return $categorias;
    }
            
    public function store(Request $request){ 
        return Categoria::create($request->all());
    }    

    public function show($id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        return $categoria;
    }

    public function update(Request $request, Categoria $categoria)
    {
       
        $categoria->update($request->all());  
        return $categoria;
    }

    public function destroy($id)
    {
        $categoria=Categoria::findOrFail($id);
        $categoria->condicion='0';
        $categoria->update();
        return $categoria;
    }
}
