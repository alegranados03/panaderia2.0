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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('productos','ProductoController');
Route::resource('materiaPrima','MateriaPrimaController');
Route::resource('usuarios','UserController');
Route::get('/cambiarPass/{idUsuario}','UserController@editPassword')->name('cambiarPass');
Route::post('/actualizarPassword/{idUsuario}','UserController@actualizarPassword')->name('actualizarPassword');
Route::get('/nuestrosProductos','ProductoController@mostrarProductos')->name('mostrarProductos');
Route::get('/agregar-carrito/{idProducto},{redir}','ProductoController@agregarACarrito')->name('agregar');
Route::get('/disminuir-carrito/{idProducto}','ProductoController@disminuirUno')->name('disminuir');
Route::get('/quitarProducto/{idProducto}','ProductoController@quitarProducto')->name('quitar');
Route::get('/vercarrito','ProductoController@verCarrito')->name('verCarrito');
