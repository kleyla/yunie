<?php

namespace App\Http\Controllers;

use App\Megusta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Publicacion;
use App\MegustaPub;
use App\Cliente;

class MegustaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $megustas = Megusta::orderBy('created_at', 'DESC')->get();
        // $megustas = DB::select("select *
        //     from megustas
        //     order by megustas.created_at DESC");
        // $megustas = DB::table('megustas')->orderBy('created_at', 'DESC')->get();
        // dd($megustas);
        return \view('admin.datosInteracciones.datosMegustas', compact('megustas'));
    }

    public function datosInteracciones()
    {
        return \view('admin.datosInteracciones.datosInteracciones');
    }
    public function interacciones()
    {
        return \view('admin.interacciones.interacciones');
    }
    public function megustas()
    {
        $megustas = DB::select("select publicacions.*, productos.id as idp, productos.nombre, clientes.nombres, megusta_pubs.created_at as fecha
            from megusta_pubs, productos, publicacions, clientes
            where megusta_pubs.id_publicacion = publicacions.id and
                publicacions.id_producto = productos.id and
                megusta_pubs.id_cliente = clientes.id");
        // dd($megustas);
        return \view('admin.interacciones.megustas', \compact('megustas'));
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
        $megusta = new Megusta();
        $megusta->cant_monedas = $request->cant_monedas;
        $megusta->save();
        $megustaAn = DB::table('megustas')->where('estado', true)->first();
        $megustaAnt = Megusta::find($megustaAn->id);
        $megustaAnt->estado = false;
        $megustaAnt->save();
        $request->session()->flash('alert-success', 'Me gusta guardado con exito!');
        return \redirect()->route('datosMegustas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Megusta  $megusta
     * @return \Illuminate\Http\Response
     */
    public function show(Megusta $megusta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Megusta  $megusta
     * @return \Illuminate\Http\Response
     */
    public function edit(Megusta $megusta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Megusta  $megusta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Megusta $megusta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Megusta  $megusta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Megusta $megusta)
    {
        //
    }

    //APIS
    public function megustaAddApi(Request $request, $idp)
    {
        $publicacion = Publicacion::find($idp);
        $cliente = Cliente::where('id_firebase', $request->id_firebase)->first();
        if ($publicacion != null && $cliente != null) {
            $datoMegusta = Megusta::where('estado', true)->first();
            $megustas = new MegustaPub();
            $megustas->id_publicacion = $publicacion->id;
            $megustas->cliente = $cliente->id;
            $megustas->id_megusta = $datoMegusta->id;
            $megustas->save();
            $cliente->monedas = $cliente->monedas + $datoMegusta->cant_monedas;
            $cliente->save();
            return response()->json($megustas, 200);
        }
    }
    public function megustasApi($idp)
    {
        $publicacion = Publicacion::find($idp);
        if ($publicacion != null) {
            $megustas = MegustaPub::where('id_publicacion', $publicacion->id)->get();
            // dd($megustas);
            foreach ($megustas as $megusta) {
                $megusta->cliente = Cliente::where('id', $megusta->id_cliente)->first();
            }
            return response()->json($megustas, 200);
        }
    }
}
