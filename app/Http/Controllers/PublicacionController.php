<?php

namespace App\Http\Controllers;

use App\Publicacion;
use Illuminate\Http\Request;
use DB;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = DB::select("select publicacions.*, productos.id as idp, productos.nombre
            from publicacions, productos
            where productos.id = publicacions.id_producto and
                publicacions.estado = true");
        $productos = DB::table('productos')->where('estado', true)->get();
        // dd($publicaciones);
        return \view('admin.publicaciones.publicaciones', \compact('publicaciones', 'productos'));
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
        $publicacion = new Publicacion();
        $publicacion->descripcion = $request->descripcion;
        $publicacion->precio_oferta = $request->precio_oferta;
        $publicacion->cant_monedas = $request->cant_monedas;
        $publicacion->fecha_ini = $request->fecha_ini;
        $publicacion->fecha_fin = $request->fecha_fin;
        $publicacion->id_producto = $request->producto;
        $publicacion->save();
        $request->session()->flash('alert-success', 'Publicacion guardada con exito!');
        return \redirect()->route('publicaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show($idp)
    {
        $publicacion = Publicacion::find($idp);
        if ($publicacion != null) {
            $megustas = DB::table('megusta_pubs')->where('id_publicacion', $publicacion->id)->count();
            // dd($megustas);
            $compartirs = DB::table('compartir_pubs')->where('id_publicacion', $publicacion->id)->count();
            $comentarios = DB::table('comentar_pubs')->where('id_publicacion', $publicacion->id)->count();
            $comentarios_pub = DB::select("select comentar_pubs.*, clientes.nombres
                from comentar_pubs, clientes
                where comentar_pubs.id_cliente = clientes.id and
                    comentar_pubs.id_publicacion = $publicacion->id");
            // dd($comentarios_pub);
            $producto = DB::table('productos')->where('id', $publicacion->id_producto)->first();
            return \view('admin.publicaciones.verPublicacion', compact('publicacion', 'producto', 'megustas', 'compartirs', 'comentarios','comentarios_pub'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit($idp)
    {
        $publicacion = Publicacion::find($idp);
        if ($publicacion != null) {
            $producto = DB::table('productos')->where('id', $publicacion->id_producto)->first();
            return \view('admin.publicaciones.editPublicacion', compact('publicacion', 'producto'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idp)
    {
        $publicacion = Publicacion::find($idp);
        if ($publicacion != null) {
            $publicacion->descripcion = $request->descripcion;
            $publicacion->precio_oferta = $request->precio_oferta;
            $publicacion->cant_monedas = $request->cant_monedas;
            $publicacion->fecha_ini = $request->fecha_ini;
            $publicacion->fecha_fin = $request->fecha_fin;
            $publicacion->save();
            $request->session()->flash('alert-success', 'Publicacion actualizado con exito!');
            return \redirect()->route('editPublicacion', $publicacion->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $idp)
    {
        $publicacion = Publicacion::find($idp);
        if ($publicacion != null) {
            $publicacion->estado = false;
            $publicacion->save();
            $request->session()->flash('alert-danger', 'Publicacion elimninada con exito!');
            return \redirect()->route('publicaciones');
        }
    }
}
