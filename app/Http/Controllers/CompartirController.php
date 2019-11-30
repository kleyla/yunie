<?php

namespace App\Http\Controllers;

use App\Compartir;
use Illuminate\Http\Request;
use DB;

class CompartirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compartirs = Compartir::orderBy('created_at', 'DESC')->get();
        return \view('admin.datosInteracciones.datosCompartirs', compact('compartirs'));
    }

    public function compartirs()
    {
        $compartirs = DB::select("select publicacions.*, productos.id as idp, productos.nombre, clientes.nombres, compartir_pubs.created_at as fecha, compartir_pubs.descripcion as comentario
            from compartir_pubs, productos, publicacions, clientes
            where compartir_pubs.id_publicacion = publicacions.id and
                publicacions.id_producto = productos.id and
                compartir_pubs.id_cliente = clientes.id");
        // dd($compartirs);
        return \view('admin.interacciones.compartirs', \compact('compartirs'));
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
        $compartir = new Compartir();
        $compartir->cant_monedas = $request->cant_monedas;
        $compartir->save();
        $compartirAn = DB::table('compartirs')->where('estado', true)->first();
        $compartirAnt = Compartir::find($compartirAn->id);
        $compartirAnt->estado = false;
        $compartirAnt->save();
        $request->session()->flash('alert-success', 'Compartir guardado con exito!');
        return \redirect()->route('datosCompartirs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Compartir  $compartir
     * @return \Illuminate\Http\Response
     */
    public function show(Compartir $compartir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compartir  $compartir
     * @return \Illuminate\Http\Response
     */
    public function edit(Compartir $compartir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compartir  $compartir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compartir $compartir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compartir  $compartir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compartir $compartir)
    {
        //
    }
}
