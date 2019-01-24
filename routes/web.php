<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('contenido/contenido');
});
//Rutas Categoria
Route::get('/categoria', 'CategoriaController@index');
Route::post('/categoria/registrar', 'CategoriaController@store');
Route::put('/categoria/actualizar', 'CategoriaController@update');
Route::put('/categoria/desactivar', 'CategoriaController@desactivar');
Route::put('/categoria/activar', 'CategoriaController@activar');
Route::get('/categoria/selectCategoria', 'CategoriaController@selectCategoria');

//Rutas Articulos
Route::get('/articulo', 'ArticuloConstroller@index');
Route::post('/articulo/registrar', 'ArticuloConstroller@store');
Route::put('/articulo/actualizar', 'ArticuloConstroller@update');
Route::put('/articulo/desactivar', 'ArticuloConstroller@desactivar');
Route::put('/articulo/activar', 'ArticuloConstroller@activar');