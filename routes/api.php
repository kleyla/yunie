<?php

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
=======


>>>>>>> 3d3cce9af13c72b331bb82555b14cc53df13cd44
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

Route::post('login', 'UserController@loginApi');
Route::get('publicaciones/{uid}', 'ProductoController@publicacionesApi');
Route::get('usuarios', 'UserController@usuariosApi');
Route::get('publicacion/{id}/comentarios', 'PublicacionController@publicacionApi');
Route::post('register', 'UserController@registerApi');
Route::post('publicacion/{idp}/comentario/add', 'PublicacionController@publicacionComentarioAddApi');
Route::post('buscar', 'PublicacionController@buscarApi');
Route::get('example', 'PublicacionController@example');
Route::get('example2', 'PublicacionController@example2');

//Ver Publicaciones
Route::get('cliente/{uid}/publicaciones', 'PublicacionController@publicacionListaClienteApi');
Route::get('vendedor/{id}/publicaciones', 'PublicacionController@publicacionListaVendedorApi');
Route::get('tienda/{id}/publicaciones', 'PublicacionController@publicacionListaTiendaApi');


// IMAGENES
Route::get('/file/images/{fileName}', 'ProductoController@images');
Route::get('/archivo/images/{fileName}', 'ProductoController@images');
Route::get('/file/imageUser/{fileName}', 'UserController@imageUser');
Route::get('/file/imageProducto/{fileName}', 'ProductoController@imageProducto');
Route::get('/file/imageTienda/{fileName}', 'ProductoController@imageTienda');

// ME GUSTA
Route::get('sigoTienda/{idt}/{uid}', 'SeguirController@sigoTiendaApi');
Route::post('seguirTienda/{idt}', 'SeguirController@seguirTiendaApi');

Route::post('megustaAdd/{idp}', 'MegustaController@megustaAddApi');
Route::get('megustas/{idp}', 'MegustaController@megustasApi');
Route::get('compartir/{idp}', 'CompartirController@compartirApi');
Route::post('compartirAdd/{idp}', 'CompartirController@compartirAddApi');


//CARRITO
Route::get('getCarrito/{uid}', 'CarritoController@getCarritoApi');
Route::get('getCarritoTotal/{uid}', 'CarritoController@getCarritoTotalApi');
Route::post('comprar', 'CarritoController@comprarApi');
Route::post('carritoAdd/{idp}', 'CarritoController@carritoAddApi');
Route::post('delCartProd', 'CarritoController@delCartProdApi');

Route::get('getProductosTienda/{idt}', 'ProductoController@getProductosTiendaApi');

// WISHLIST
Route::post('addListadeseo/{idp}', 'ListadeseoController@addListadeseoApi');
Route::get('getListaDeseo/{uid}', 'ListadeseoController@getListaDeseoApi');
Route::post('delListadeseoProd', 'ListadeseoController@delListadeseoProdApi');

// COMPARTIR
Route::get('getPublicacion/{idp}/', 'PublicacionController@getPublicacionApi');
Route::post('addComentario/{idp}', 'PublicacionController@addComentarioApi');
