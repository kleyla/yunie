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
    return redirect()->route('login');
});
Route::get('/login2', function () {
    return view('auth/login2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// USUARIOS
Route::get('/dash', 'HomeController@index')->name('dash');
Route::get('/usuarios', 'UserController@index')->name('usuarios');
Route::get('/verUsuario/{idu}', 'UserController@verUsuario')->name('verUsuario');
Route::get('/editUsuario/{idu}', 'UserController@editUsuario')->name('editUsuario');
Route::post('/userAdd', 'UserController@userAdd')->name('userAdd');
Route::post('/userDel/{idu}', 'UserController@destroy');
Route::post('/userUpdate/{idu}', 'UserController@store')->name('userUpdate');
// PERMISOS
Route::get('/permisos', 'PermisoController@index')->name('permisos');


// TIENDAS
Route::get('/tiendas', 'TiendaController@index')->name('tiendas');
Route::post('/tiendaAdd', 'TiendaController@store')->name('tiendaAdd');
Route::get('/verTienda/{idt}', 'TiendaController@show')->name('verTienda');
Route::get('/editTienda/{idt}', 'TiendaController@edit')->name('editTienda');
Route::post('/tiendaUpdate/{idt}', 'TiendaController@update')->name('tiendaUpdate');
Route::post('/tiendaDel/{idv}', 'TiendaController@destroy');

// CLIENTES
Route::get('/clientes', 'ClienteController@index')->name('clientes');
Route::post('/clienteAdd', 'ClienteController@store')->name('clienteAdd');
Route::get('/verCliente/{idc}', 'ClienteController@show')->name('verCliente');
Route::get('/editVendedor/{idv}', 'ClienteController@edit')->name('editVendedor');
Route::post('/userUpdate/{idu}', 'ClienteController@update')->name('userUpdate');
Route::post('/vendedoresDel/{idv}', 'ClienteController@destroy');
Route::get('/verCarrito/{idc}', 'ClienteController@verCarrito')->name('verCarrito');
Route::get('/verListaDeseos/{idc}', 'ClienteController@verListaDeseos')->name('verListaDeseos');
Route::get('/verTiendasSeguidas/{idc}', 'ClienteController@verTiendasSeguidas')->name('verTiendasSeguidas');
Route::get('/verMegustas/{idc}', 'ClienteController@verMegustas')->name('verMegustas');
Route::get('/verMonedas/{idc}', 'ClienteController@verMonedas')->name('verMonedas');


// VENDEDORES
Route::get('/vendedores', 'VendedorController@index')->name('vendedores');
Route::post('/vendedorAdd', 'VendedorController@store')->name('vendedorAdd');
Route::get('/verVendedor/{idv}', 'VendedorController@show')->name('verVendedor');
Route::get('/editVendedor/{idv}', 'VendedorController@edit')->name('editVendedor');
Route::post('/vendedorUpdate/{idv}', 'VendedorController@update')->name('vendedorUpdate');
Route::post('/vendedorDel/{idv}', 'VendedorController@destroy');

// CATEGORIAS
Route::get('/categorias', 'CategoriaController@index')->name('categorias');
Route::post('/categoriaAdd', 'CategoriaController@store')->name('categoriaAdd');
Route::get('/verCategoria/{idc}', 'CategoriaController@show')->name('verCategoria');
Route::get('/editCategoria/{idc}', 'CategoriaController@edit')->name('editCategoria');
Route::post('/categoriaUpdate/{idc}', 'CategoriaController@update')->name('categoriaUpdate');
Route::post('/categoriaDel/{idc}', 'CategoriaController@destroy');

// PRODUCTOS
Route::get('/productos', 'ProductoController@index')->name('productos');
Route::get('/newProducto', 'ProductoController@create')->name('newProducto');
Route::post('/productoAdd', 'ProductoController@store')->name('productoAdd');
Route::get('/verProducto/{idp}', 'ProductoController@show')->name('verProducto');
Route::get('/editProducto/{idp}', 'ProductoController@edit')->name('editProducto');
Route::post('/productoUpdate/{idp}', 'ProductoController@update')->name('productoUpdate');
Route::post('/productoDel/{idp}', 'ProductoController@destroy');

// PUBLICACIONES
Route::get('/publicaciones', 'PublicacionController@index')->name('publicaciones');
Route::get('/verPublicacion/{idp}', 'PublicacionController@show')->name('verPublicacion');
Route::get('/editPublicacion/{idp}', 'PublicacionController@edit')->name('editPublicacion');
Route::post('/publicacionUpdate/{idp}', 'PublicacionController@update')->name('publicacionUpdate');
Route::post('/publicacionAdd', 'PublicacionController@store')->name('publicacionAdd');
Route::post('/publicacionDel/{idp}', 'PublicacionController@destroy');

// DATOS INTERACCIONES
Route::get('/datosInteracciones', 'MegustaController@datosInteracciones')->name('datosInteracciones');
// ME GUSTAS
Route::get('/datosMegustas', 'MegustaController@index')->name('datosMegustas');
Route::post('/datosMegustaAdd', 'MegustaController@store')->name('datosMegustaAdd');
// COMPARTIRS
Route::get('/datosCompartirs', 'CompartirController@index')->name('datosCompartirs');
Route::post('/datosCompartirAdd', 'CompartirController@store')->name('datosCompartirAdd');
// COMENTARIOS
Route::get('/datosComentarios', 'ComentarioController@index')->name('datosComentarios');
Route::post('/datosComentarioAdd', 'ComentarioController@store')->name('datosComentarioAdd');
//  SEGUIR
Route::get('/datosSeguirs', 'SeguirController@index')->name('datosSeguirs');
Route::post('/datosSeguirAdd', 'SeguirController@store')->name('datosSeguirAdd');

// INTERACCIONES
Route::get('/interacciones', 'MegustaController@interacciones')->name('interacciones');
Route::get('/megustas', 'MegustaController@megustas')->name('megustas');
Route::get('/compartirs', 'CompartirController@compartirs')->name('compartirs');
Route::get('/comentarios', 'ComentarioController@comentarios')->name('comentarios');
Route::get('/seguirs', 'SeguirController@seguirs')->name('seguirs');


// SOLO PARA LOS VENDEDORES
Route::get('/miPerfilVendedor', 'VendedorController@miPerfilVendedor')->name('miPerfilVendedor');
Route::get('/misTiendas', 'VendedorController@misTiendas')->name('misTiendas');
Route::get('/misProductos', 'VendedorController@misProductos')->name('misProductos');
Route::get('/newProductoVendedor', 'VendedorController@newProductoVendedor')->name('newProductoVendedor');
Route::get('/misPublicaciones', 'VendedorController@misPublicaciones')->name('misPublicaciones');
Route::get('/misInteracciones', 'VendedorController@misInteracciones')->name('misInteracciones');
Route::get('/misMegustas', 'VendedorController@misMegustas')->name('misMegustas');
Route::get('/misCompartirs', 'VendedorController@misCompartirs')->name('misCompartirs');
Route::get('/misComentarios', 'VendedorController@misComentarios')->name('misComentarios');

// REPORTES
Route::get('/reportes', 'ReporteController@reportes')->name('reportes');

// Route::get('/downUsers', 'ReporteController@downUsers')->name('downUsers');
Route::post('/downUsers', 'ReporteController@downUsers')->name('downUsers');

Route::post('/downVendedores', 'ReporteController@downVendedores')->name('downVendedores');
Route::post('/downClientes', 'ReporteController@downClientes')->name('downClientes');
Route::post('/downTiendas', 'ReporteController@downTiendas')->name('downTiendas');
Route::post('/downMegustas', 'ReporteController@downMegustas')->name('downMegustas');
Route::post('/downProductos', 'ReporteController@downProductos')->name('downProductos');

// AI
Route::get('/imagenAi', 'ProductoController@imagenAi')->name('imagenAi');
Route::post('/buscar', 'ProductoController@buscar')->name('buscar');
