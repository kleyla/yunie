<?php

namespace App\Http\Controllers;

use App\User;
use App\Tienda;
use App\Vendedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Ubicacion;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     *
     *
     *
     * Este codigo a sido hardcodeado por Karen Rodriguez no tengo los derechos de autor pero las desveladas
     *no fueron envano, pasare Sofware 1 porque si no me mato, quiero agradecer al inge Martinez por hacer de mi
     *vida la que es hoy en dia, la de una futura ingeniera, a Yo-Landa, por estar alli conmigo durante tanto tiempo,
     *en mis momentos mas dificil y para sacarme una sonrisa, aque una amiga, una mejor amiga, al guapo de Fabrizio
     *por ser el MAS CAPO de la carrera, a Andrea Laruta por ser una amiga sincera, a Guillermo por tener paciencia conmigo...
     *
     *
     *
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiendas = DB::table('tiendas')->where('estado', true)->get();
        $vendedores = DB::table('vendedors')->where('estado', true)->get();
        return \view('admin.tiendas.tiendas', compact('tiendas', 'vendedores'));
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
        $tienda = new Tienda();
        $tienda->nombre = $request->nombre;
        $ubicacion = new Ubicacion();
        $ubicacion->latitud = $request->latitud;
        $ubicacion->longitud = $request->longitud;
        $ubicacion->save();
        $file = $request->file('foto');
        if ($file) {
            $path = public_path() . '/img/tiendas';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);
            $tienda->foto = $fileName;
        }
        // $tiena->descripcion = $request->descripcion;
        $tienda->nit = $request->nit;
        $tienda->telefono = $request->telefono;
        $tienda->direccion = $request->direccion;
        $tienda->id_vendedor = $request->vendedor;
        $tienda->id_ubicacion = $ubicacion->id;
        $tienda->save();
        $request->session()->flash('alert-success', 'Tienda guardada con exito!');
        return \redirect()->route('tiendas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function show($idt)
    {
        $tienda = Tienda::find($idt);
        if ($tienda != null) {
            $productos = DB::select("select productos.*
                from productos
                where productos.id_tienda = $tienda->id and
                    productos.estado = true");
            // $productos = DB::table('productos')->where('estado', true)->get();
            // dd($productos);
            $vendedor = Vendedor::find($tienda->id_vendedor);
            // dd($vendedor);
            $usuario = User::find($vendedor->id_user);
            // $ubicacion = DB::table('ubicacions')->where('id', $tienda->id_ubicacion)->orderBy('created_at', 'DESC')->first();
            $ubicacion = DB::select("select ubicacions.*
                from ubicacions
                where ubicacions.id = $tienda->id_ubicacion");
            // dd($ubicacion);
            return \view('admin.tiendas.verTienda', compact('tienda', 'productos', 'vendedor', 'usuario', 'ubicacion'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function edit($idt)
    {
        $tienda = Tienda::find($idt);
        if ($tienda != null) {
            return \view('admin.tiendas.editTienda', compact('tienda'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idt)
    {
        $tienda = Tienda::find($idt);
        if ($tienda != null) {
            $tienda->nombre = $request->nombre;
            // $tiena->descripcion = $request->descripcion;
            $tienda->nit = $request->nit;
            $tienda->telefono = $request->telefono;
            $tienda->direccion = $request->direccion;
            $tienda->id_vendedor = $request->vendedor;
            $tienda->save();
            $request->session()->flash('alert-success', 'Tienda actualizada con exito!');
            return \redirect()->route('editTienda', $tienda->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $idt)
    {
        $tienda = Tienda::find($idt);
        if ($tienda != null) {
            $tienda->estado = false;
            $tienda->save();
            $request->session()->flash('alert-danger', 'Tienda eliminada con exito!');
            return \redirect()->route('tiendas');
        }
    }
}
