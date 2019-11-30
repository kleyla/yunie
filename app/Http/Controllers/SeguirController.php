<?php

namespace App\Http\Controllers;

use App\Seguir;
use Illuminate\Http\Request;
use DB;

class SeguirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seguirs = Seguir::orderBy('created_at', 'DESC')->get();
        return \view('admin.datosInteracciones.datosSeguirs', compact('seguirs'));
    }

    public function seguirs()
    {
        $seguirs = DB::select("select seguir_tiendas.id, clientes.nombres, clientes.id as idc,
                tiendas.nombre, tiendas.id as idt, seguirs.cant_monedas, seguir_tiendas.created_at as fecha
            from seguir_tiendas, tiendas, clientes, seguirs
            where seguir_tiendas.id_tienda = tiendas.id and
                seguir_tiendas.id_cliente = clientes.id and
                seguir_tiendas.id_seguir = seguirs.id");
        // dd($seguirs);
        return \view('admin.interacciones.seguirs', \compact('seguirs'));
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
        $seguir = new Seguir();
        $seguir->cant_monedas = $request->cant_monedas;
        $seguir->save();
        $seguirAn = DB::table('seguirs')->where('estado', true)->first();
        $seguirAnt = Seguir::find($seguirAn->id);
        $seguirAnt->estado = false;
        $seguirAnt->save();
        $request->session()->flash('alert-success', 'Seguir tienda guardado con exito!');
        return \redirect()->route('datosSeguirs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seguir  $seguir
     * @return \Illuminate\Http\Response
     */
    public function show(Seguir $seguir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seguir  $seguir
     * @return \Illuminate\Http\Response
     */
    public function edit(Seguir $seguir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seguir  $seguir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seguir $seguir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seguir  $seguir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seguir $seguir)
    {
        //
    }
}
