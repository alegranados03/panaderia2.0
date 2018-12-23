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

Route::get('/tiendaIni', function () {
    return redirect()->action('TiendaController@index');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('categorias','CategoriaController');


Route::resource('productos','ProductoController');
Route::get('/nuestrosProductos/{idCategoria}','ProductoController@mostrarProductos')->name('mostrarProductos');
Route::get('/nuestrosProductos','ProductoController@mostrarCategorias')->name('mostrarCategorias');



Route::resource('tienda','TiendaController');
Route::get('miperfil','TiendaController@miperfil')->name('miperfil');
Route::get('misordenes', 'TiendaController@misordenes')->name('misordenes');
Route::resource('materiaPrima','MateriaPrimaController');




Route::resource('usuarios','UserController');
Route::get('/cambiarPass','UserController@editPassword')->name('cambiarPass');
Route::post('/actualizarPassword/{idUsuario}','UserController@actualizarPassword')->name('actualizarPassword');
Route::post('/asignarTarjeta/{id}', 'UserController@asignarTarjeta')->name('asignarTarjeta');
Route::get('/editarPerfil/{idUsuario}','UserController@editarPerfil')->name('editarPerfil');
Route::put('/actualizarMiPerfil/{id}','UserController@editarPerfilUpdate')->name('actualizarMiPerfil');

//rutas del carrito
Route::get('/agregar-carrito/{idProducto}','ProductoController@agregarACarrito')->name('agregar');
Route::get('/disminuir-carrito/{idProducto}','ProductoController@disminuirUno')->name('disminuir');
Route::get('/quitarProducto/{idProducto}','ProductoController@quitarProducto')->name('quitar');
Route::get('/vercarrito','ProductoController@verCarrito')->name('verCarrito');
Route::get('/agregar-varios/{idProducto}/{cantidad}','ProductoController@agregarVarios')->name('agregarVarios');


//Rutas de pago
Route::resource('pagos','PagoController');
Route::get('vistaPago/{id}','PagoController@vistaPago')->name('vistaPago');
Route::post('pagoLocal/{id}','PagoController@pagoLocal')->name('pagoLocal');


//Rutas de ordenes
Route::resource('ordenes','OrdenController');
Route::get('historialLocal','OrdenController@historialLocal')->name('historialLocal');
Route::get('historialLinea','OrdenController@historialLinea')->name('historialLinea');
Route::get('pendienteLinea','OrdenController@pendienteLinea')->name('pendienteLinea');
Route::get('agregarDetalle/{id}', 'OrdenController@agregarDetalle')->name('agregarProducto');
Route::get('quitarDetalle/{id}', 'OrdenController@quitarDetalle')->name('quitarProducto');
Route::post('agregarDetalleStore/','OrdenController@agregarDetalleStore')->name('agregarProductoStore');
Route::post('quitarDetalleStore/','OrdenController@quitarDetalleStore')->name('quitarProductoStore');

//Rutas de Mesas
Route::resource('mesas','MesaController');
