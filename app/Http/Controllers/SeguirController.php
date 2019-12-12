<?php

namespace App\Http\Controllers;

use App\Seguir;
use App\Tienda;
use App\SeguirTienda;
use App\User;
use App\Cliente;
use App\Moneda;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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
    // APIS
    public function sigoTiendaApi($idt, $uid)
    {
        $tienda = Tienda::find($idt);
        $user = User::where('id_firebase', $uid)->first();
        if ($tienda != null && $user != null) {
            $cliente = Cliente::where('id_user', $user->id)->first();
            $seguirTienda = SeguirTienda::where('id_tienda', $tienda->id)
                ->where('id_cliente', $cliente->id)->first();
            if ($seguirTienda == null) {
                return \response()->json(false, 200);
            } else {
                return \response()->json(true, 200);
            }
        }
    }
    public function seguirTiendaApi(Request $request, $idt)
    {
        $tienda = Tienda::find($idt);
        $user = User::where('id_firebase', $request->id_firebase)->first();
        if ($tienda != null && $user != null) {
            $cliente = Cliente::where('id_user', $user->id)->first();
            $seguir = Seguir::where('estado', true)
                ->orderBy('created_at', 'DESC')->first();
            $seguirTienda = new SeguirTienda();
            $seguirTienda->id_cliente = $cliente->id;
            $seguirTienda->id_tienda = $tienda->id;
            $seguirTienda->id_seguir = $seguir->id;
            $seguirTienda->save();
            //MONEDAS AL CLIENTE
            $monedas_detalle = new Moneda();
            $monedas_detalle->id_seguir = $seguirTienda->id;
            $monedas_detalle->save();
            $cliente->monedas = $cliente->monedas + $seguir->cant_monedas;
            $cliente->save();
            return \response()->json($seguirTienda, 200);
        }
    }
}
