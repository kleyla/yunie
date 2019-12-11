<?php

namespace App\Http\Controllers;

use App\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios = Comentario::orderBy('created_at', 'DESC')->get();
        return \view('admin.datosInteracciones.datosComentarios', compact('comentarios'));
    }
    public function comentarios()
    {
        $comentarios = DB::select("select publicacions.*, productos.id as idp, productos.nombre, clientes.nombres, comentar_pubs.created_at as fecha, comentar_pubs.descripcion as comentario
            from comentar_pubs, productos, publicacions, clientes
            where comentar_pubs.id_publicacion = publicacions.id and
                publicacions.id_producto = productos.id and
                comentar_pubs.id_cliente = clientes.id");
        // dd($compartirs);
        return \view('admin.interacciones.comentarios', \compact('comentarios'));
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
        $comentario = new Comentario();
        $comentario->cant_monedas = $request->cant_monedas;
        $comentario->save();
        $comentarAn = DB::table('comentarios')->where('estado', true)->first();
        $comentarAnt = Comentario::find($comentarAn->id);
        $comentarAnt->estado = false;
        $comentarAnt->save();
        $request->session()->flash('alert-success', 'Datos de comentario guardado con exito!');
        return \redirect()->route('datosComentarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        //
    }
}
