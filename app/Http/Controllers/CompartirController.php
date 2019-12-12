<?php

namespace App\Http\Controllers;

use App\Compartir;
use App\Publicacion;
use App\Producto;
use App\Imagen;
use App\User;
use App\Cliente;
use App\ComentarPub;
use App\CompartirPub;
use App\Moneda;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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
    //APIS
    public function compartirApi($idp)
    {
        $publicacion = Publicacion::find($idp);
        if ($publicacion != null) {
            $producto = Producto::find($publicacion->id_producto);
            $publicacion->producto = $producto;
            $publicacion->imagenes = Imagen::where('id_producto', $producto->id)->get();
            return response()->json($publicacion, 200);
        }
    }
    public function compartirAddApi(Request $request, $idp)
    {
        $publicacion = Publicacion::find($idp);
        $user = User::where('id_firebase', $request->id_firebase)->first();
        if ($publicacion != null && $user != null) {
            $cliente = Cliente::where('id_user', $user->id)->first();
            $compartir = Compartir::where('estado', true)
                ->orderBy('created_at', 'DESC')->first();
            $comparti_pub = new CompartirPub();
            $comparti_pub->descripcion = $request->descripcion;
            $comparti_pub->id_cliente = $cliente->id;
            $comparti_pub->id_publicacion = $publicacion->id;
            $comparti_pub->id_compartir = $compartir->id;
            $comparti_pub->save();
            $monedas_detalle = new Moneda();
            $monedas_detalle->id_compartir = $compartir->id;
            $monedas_detalle->save();
            $cliente->monedas = $cliente->monedas + $compartir->cant_monedas;
            $cliente->save();
            return response()->json($comparti_pub, 200);
        }
    }
}
