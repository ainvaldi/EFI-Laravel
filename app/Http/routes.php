<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();
Route::get('/', function () {
    return view('auth/login');
});  



Route::group(['middleware'=>['web','auth','admin']], function(){

    Route::get('/home', 'HomeController@index');
    Route::resource('almacen/categoria','CategoriaController');
    Route::resource('almacen/articulo','ArticuloController');
    Route::resource('ventas/cliente','ClienteController');
    Route::resource('compras/proveedor','ProveedorController');
    Route::resource('compras/ingreso','IngresoController');
    Route::resource('ventas/venta','VentaController');
    Route::resource('seguridad/usuario','UsuarioController');
    Route::get('/{slug?}','HomeController@index');
});

Route::group(['middleware'=>['web','auth']], function(){

    Route::get('/home', 'HomeController@index');
    Route::resource('almacen/categoria','CategoriaController');
    Route::resource('almacen/articulo','ArticuloController');
    Route::resource('ventas/cliente','ClienteController');
    Route::resource('compras/proveedor','ProveedorController');
    Route::resource('compras/ingreso','IngresoController');
    Route::resource('ventas/venta','VentaController');
    Route::get('/{slug?}','HomeController@index');
});



