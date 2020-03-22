<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('productos','ProductosController@getAll')->name('LeerTodosProductos');
Route::post('productos','ProductosController@add')->name('CrearProductos');
Route::get('productos/{id}','ProductosController@get')->name('LeerProducto');
Route::post('productos/{id}','ProductosController@edit')->name('ActualizarProducto');
Route::post('productos/{id}','ProductosController@delete')->name('EliminarProducto');
Route::post('venta/{id}','ProductosController@sale')->name('ventaProducto');