<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::post('login','UserController@loginApi');
Route::get('publicaciones', 'ProductoController@publicacionesApi');
Route::get('usuarios', 'UserController@usuariosApi');
Route::get('publicacion/{id}/comentarios', 'PublicacionController@publicacionApi');
Route::post('register','UserController@registerApi');
Route::post('publicacion/{idp}/comentario/add','PublicacionController@publicacionComentarioAddApi');
Route::post('buscar','PublicacionController@buscarApi');
Route::get('example','PublicacionController@example');
Route::get('example2','PublicacionController@example2');

//Ver Publicaciones
Route::get('cliente/{id}/publicaciones', 'PublicacionController@publicacionListaClienteApi');
Route::get('vendedor/{id}/publicaciones', 'PublicacionController@publicacionListaVendedorApi');
Route::get('tienda/{id}/publicaciones', 'PublicacionController@publicacionListaTiendaApi');


// IMAGENES
Route::get('/file/images/{fileName}', 'ProductoController@images');
Route::get('/archivo/images/{fileName}', 'ProductoController@images');
Route::get('/file/imageUser/{fileName}', 'UserController@imageUser');
Route::get('/file/imageProducto/{fileName}', 'ProductoController@imageProducto');
Route::get('/file/imageTienda/{fileName}', 'ProductoController@imageTienda');

