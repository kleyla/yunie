<?php

namespace App\Http\Controllers;

use App\Detalle;
use App\Nota;
use App\Producto;
use App\Publicacion;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::where('estado', true)->get();
        return view('admin.pedidos.pedidos', compact('notas'));
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
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show($idn)
    {
        $nota = Nota::find($idn);
        if ($nota != null) {
            $detalles = Detalle::where('id_nota', $nota->id)->get();
            foreach ($detalles as $detalle) {
                $publicacion =  Publicacion::find($detalle->id_publicacion);
                $detalle->publicacion = $publicacion;
                $detalle->producto = Producto::find($publicacion->id_producto);
            }
            // dd($detalles);
            // return $detalles;
            return view('admin.pedidos.verPedido', compact('nota', 'detalles'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit(Nota $nota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        //
    }
}
