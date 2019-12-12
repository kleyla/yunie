<?php

namespace App\Http\Controllers;

use App\Listadeseo;
use Illuminate\Http\Request;

class ListadeseoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Listadeseo  $listadeseo
     * @return \Illuminate\Http\Response
     */
    public function show(Listadeseo $listadeseo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listadeseo  $listadeseo
     * @return \Illuminate\Http\Response
     */
    public function edit(Listadeseo $listadeseo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listadeseo  $listadeseo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listadeseo $listadeseo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listadeseo  $listadeseo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listadeseo $listadeseo)
    {
        //
    }
<<<<<<< HEAD
=======
    // API

    public function addListadeseoApi(Request $request, $idpro)
    {
        $producto = Producto::find($idpro);
        $user = User::where('id_firebase', $request->id_firebase)->first();
        if ($producto != null && $user != null) {
            $cliente = Cliente::where('id_user', $user->id)->first();
            $listadeseo = Listadeseo::where('id_cliente', $cliente->id)->first();
            $listaProducto = new Listaproducto();
            $listaProducto->id_producto = $producto->id;
            $listaProducto->id_listadeseo = $listadeseo->id;
            $listaProducto->save();
            return response()->json($listaProducto, 200);
        }
    }

    public function getListaDeseoApi($uid)
    {
        $user = User::where('id_firebase', $uid)->first();
        if ($user != null) {
            $cliente = Cliente::where('id_user', $user->id)->first();
            $listadeseo = Listadeseo::where('id_cliente', $cliente->id)->first();
            $listaProductos = Listaproducto::where('id_listadeseo', $listadeseo->id)
                ->where('estado', true)->get();
            foreach ($listaProductos as $lista) {
                $lista->producto = Producto::find($lista->id_producto);
                $lista->publicacion = Publicacion::where('id_producto', $lista->id_producto)
                    ->orderBy('created_at', 'DESC')->first();
            }
            return response()->json($listaProductos, 200);
        }
    }
    public function delListadeseoProdApi(Request $request)
    {
        $listaProducto = Listaproducto::find($request->id_listaProducto);
        if ($listaProducto != null) {
            $listaProducto->estado = false;
            $listaProducto->save();
            return response()->json($listaProducto, 200);
        }
    }
>>>>>>> 3a36eaea62b97c1efd9aea30d19078256907747b
}
