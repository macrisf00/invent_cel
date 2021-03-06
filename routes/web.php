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
    return view('welcome');
});

Route::resource('producto', 'productoController');
Route::resource('caracteristica', 'caracteristicaController');
Route::resource('detalleProducto', 'detalleProductoController');
Route::resource('tipoUsuario', 'tipoUsuarioController');
Route::resource('tipoDocumento', 'tipoDocumentoController');
Route::resource('tipoTelefono', 'tipoTelefonoController');
Route::resource('usuario', 'usuarioController');


Route::resource('movimiento','movimientoController');
Route::resource('local', 'localController');
Route::resource('rol', 'rolController');
Route::resource('usuarioRol', 'usuarioRolController');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


