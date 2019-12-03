<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuarios = DB::table('users')->count();
        // dd($usuarios);
        $tiendas = DB::table('tiendas')->count();
        $productos = DB::table('productos')->count();
        $categorias = DB::table('categorias')->count();
        $timestamp = DB::select("select date(created_at) as fecha
            from clientes
            where clientes.estado = true
            group by date(created_at)");
        // dd($timestamp);
        $fechas = array();
        foreach ($timestamp as $time) {
            array_push($fechas, $time->fecha);
        }
        // dd($fechas);
        $clientes = DB::select("select count(clientes.id) as cantidad
            from clientes
            where estado = true
            group by date(created_at)");
        // dd($clientes);
        $cantClientes = array();
        foreach ($clientes as $cliente) {
            array_push($cantClientes, $cliente->cantidad);
        }
        //Intereacciones
        $timestampMg = DB::select("select date(created_at) as fecha, count(id) as cantidad
            from megusta_pubs
            where megusta_pubs.estado = true
            group by date(created_at)");
        // dd($timestampMg);
        $fechasMg = array();
        foreach ($timestampMg as $time) {
            array_push($fechasMg, $time->fecha);
        }
        $cantMg = array();
        foreach ($timestampMg as $time) {
            array_push($cantMg, $time->cantidad);
        }

        $timestampCom = DB::select("select date(created_at) as fecha, count(id) as cantidad
            from comentar_pubs
            where comentar_pubs.estado = true
            group by date(created_at)");
        // dd($timestampCom);
        $fechasCom = array();
        foreach ($timestampCom as $time) {
            array_push($fechasCom, $time->fecha);
        }
        $cantCom = array();
        foreach ($timestampCom as $time) {
            array_push($cantCom, $time->cantidad);
        }
        $timestampComp = DB::select("select date(created_at) as fecha, count(id) as cantidad
            from compartir_pubs
            group by date(created_at)");
        // dd($timestampComp);
        $fechasComp = array();
        foreach ($timestampComp as $time) {
            array_push($fechasComp, $time->fecha);
        }
        $cantComp = array();
        foreach ($timestampComp as $time) {
            array_push($cantComp, $time->cantidad);
        }
        $timestampSeguir = DB::select("select date(created_at) as fecha, count(id) as cantidad
            from seguir_tiendas
            group by date(created_at)");
        // dd($timestampSeguir);
        $fechasSeg = array();
        foreach ($timestampSeguir as $time) {
            array_push($fechasSeg, $time->fecha);
        }
        $cantSeg = array();
        foreach ($timestampSeguir as $time) {
            array_push($cantSeg, $time->cantidad);
        }
        // dd($fechasMg);
        $fechasInt = array_unique($fechasMg);
        // dd($fechasInt);
        // dd($segCant);

        return view('admin.dash', compact('usuarios', 'tiendas', 'productos', 'categorias', 'fechas', 'cantClientes',
            'fechasMg', 'cantMg','fechasCom','cantCom','fechasComp','cantComp','fechasSeg','cantSeg'));
    }
}
