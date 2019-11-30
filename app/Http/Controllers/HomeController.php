<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

        return view('admin.dash', compact('usuarios', 'tiendas','productos', 'categorias'));
    }
}
