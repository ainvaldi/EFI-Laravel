<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\Persona;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\PersonaFormRequest;
use DB;
class ApiProveedorController extends Controller
{
    public function index(Request $request)
    {
        $personas = DB::table('persona')
        ->select('persona.idpersona','persona.nombre','persona.num_documento')
        ->where('tipo_persona','=','Proveedor')
        ->orderBy('persona.idpersona','desc')
        ->get();
        return $personas;
    }
    public function store(Request $request)
    {
        $persona = new Persona;
        $persona ->tipo_persona='Proveedor';
        $persona ->nombre=$request->get('nombre');
        $persona ->tipo_documento=$request->get('tipo_documento');
        $persona ->num_documento=$request->get('num_documento');
        $persona ->direccion=$request->get('direccion');
        $persona ->telefono=$request->get('telefono');
        $persona ->email=$request->get('email');    
        return Persona::create($request->all());
    }
    public function show($id)
    {
        $personas = DB::table('persona as p')
        ->select('p.idpersona','p.nombre','p.tipo_persona','p.tipo_documento','p.num_documento','p.direccion','p.telefono','p.email')
        ->where('p.idpersona','=',$id)
        ->where('p.tipo_persona','=','Proveedor')
        ->get();
        return $personas;
    }
    public function edit($id)
    {
        return view("ventas.proveedor.edit",["persona"=>Persona::findOrFail($id)]);
    }
    public function update(PersonaFormRequest $request,$id)
    {
        $persona=Persona::findOrFail($id);
        $persona->nombre=$request->get('nombre');
        $persona->tipo_documento=$request->get('tipo_documento');
        $persona->num_documento=$request->get('num_documento');
        $persona->direccion=$request->get('direccion');
        $persona->telefono=$request->get('telefono');
        $persona->email=$request->get('email');
        $persona->update();
        return Redirect::to('ventas/proveedor');
    }
    public function destroy($id)
    {
        $persona=Persona::findOrFail($id);
        $persona->tipo_persona='Inactivo';
        $persona->update();
        return Redirect::to('ventas/proveedor');
    }
}
