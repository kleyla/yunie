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
        // dd($cantClientes);
        return view('admin.dash', compact('usuarios', 'tiendas', 'productos', 'categorias', 'fechas', 'cantClientes'));
    }
}
