<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use DB;
use App\User;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = DB::table('clientes')->where('estado', true)->get();
        return \view('admin.clientes.clientes', compact('clientes'));
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
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($idc)
    {
        $cliente = Cliente::find($idc);
        if ($cliente != null) {
            $user = User::find($cliente->id_user);
            return \view('admin.clientes.verCliente', \compact('cliente', 'user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }

    public function verCarrito($idc)
    {
        $cliente = Cliente::find($idc);
        if ($cliente != null) {
            $user = User::find($cliente->id_user);
            $productos = DB::select("select productos.*
                from productos, carritos, carritoproductos
                where carritos.id_cliente = $cliente->id and
                    carritoproductos.id_carrito = carritos.id and
                    carritoproductos.id_producto = productos.id ");
            // dd($productos);
            return \view('admin.clientes.verCarrito', \compact('productos', 'user', 'cliente'));
        }
    }
    public function verListaDeseos($idc)
    {
        $cliente = Cliente::find($idc);
        if ($cliente != null) {
            $user = User::find($cliente->id_user);
            $productos = DB::select("select productos.*
            from productos, listadeseos, listaproductos
            where listadeseos.id_cliente = $cliente->id and
                listaproductos.id_listadeseo = listadeseos.id and
                listaproductos.id_producto = productos.id ");
            // dd($listaDeseos);
            return \view('admin.clientes.verListaDeseos', \compact('productos', 'cliente', 'user'));
        }
    }
    public function verTiendasSeguidas($idc)
    {
        $cliente = Cliente::find($idc);
        if ($cliente != null) {
            $user = User::find($cliente->id_user);
            $tiendas = DB::select("select tiendas.*
            from tiendas, seguir_tiendas
            where seguir_tiendas.id_cliente = $cliente->id and
                tiendas.id = seguir_tiendas.id_tienda ");
            // dd($tiendas);
            return \view('admin.clientes.verTiendasSeguidas', \compact('tiendas', 'cliente', 'user'));
        }
    }
    public function verMegustas($idc)
    {
        $cliente = Cliente::find($idc);
        if ($cliente != null) {
            $user = User::find($cliente->id_user);
            $megustas = DB::select("select publicacions.*, megusta_pubs.created_at as fecha
            from publicacions, megusta_pubs
            where megusta_pubs.id_cliente = $cliente->id and
                publicacions.id = megusta_pubs.id_publicacion ");
            // dd($megustas);
            return \view('admin.clientes.verMegustas', \compact('megustas', 'cliente', 'user'));
        }
    }
    public function verMonedas($idc)
    {
        $cliente = Cliente::find($idc);
        if ($cliente != null) {
            $user = User::find($cliente->id_user);
            // $monedas = DB::select(" select
            //     from monedas, megusta_pubs, comentar_pubs, compartir_pubs, seguir_tiendas, publicacions
            //     where monedas.id_megusta = megusta_pubs.id and
            //         monedas.id_compartir = compartir_pubs.id and
            //         monedas.id_comentar = comentar_pubs.id and
            //         monedas.id_seguir = seguir_tiendas.id and
            //         publicacions.id = megusta_pubs.id_publicacion and
            //         publicacions.id = comentar_pubs.id_publicacion and
            //         publicacions.id = compartir_pubs.id_publicacion and
            //         megusta_pubs
            //         ");
            $monedasMegusta = DB::select("select monedas.id, monedas.valor, monedas.created_at, publicacions.descripcion, publicacions.id as idp
                from monedas, megusta_pubs, publicacions
                where monedas.id_megusta = megusta_pubs.id and
                    publicacions.id = megusta_pubs.id_publicacion and
                    megusta_pubs.id_cliente = $idc");
            // dd($monedasMegusta);
            $monedasCompartir = DB::select(" select monedas.id, monedas.valor, compartir_pubs.descripcion as comentario, monedas.created_at, publicacions.descripcion, publicacions.id as idp
                from monedas, compartir_pubs, publicacions
                where monedas.id_compartir = compartir_pubs.id and
                    publicacions.id = compartir_pubs.id_publicacion and
                    compartir_pubs.id_cliente = $idc");
            // dd($monedasCompartir);
            $monedasComentar = DB::select(" select monedas.id, monedas.valor, comentar_pubs.descripcion as comentario ,monedas.created_at, publicacions.descripcion, publicacions.id as idp
                from monedas, comentar_pubs, publicacions
                where monedas.id_comentario = comentar_pubs.id and
                    publicacions.id = comentar_pubs.id_publicacion and
                    comentar_pubs.id_cliente = $idc");
            // dd($monedasComentar);
            $monedasSeguir = DB::select(" select monedas.id, monedas.valor, monedas.created_at,  tiendas.id as idt, tiendas.nombre
                from monedas, seguir_tiendas, tiendas
                where monedas.id_seguir = seguir_tiendas.id and
                    tiendas.id = seguir_tiendas.id_tienda and
                    seguir_tiendas.id_cliente = $idc");
            // dd($monedasSeguir);
            return \view('admin.clientes.verMonedas', compact('monedasMegusta', 'monedasCompartir', 'monedasComentar', 'monedasSeguir', 'cliente', 'user'));
        }
    }
}
