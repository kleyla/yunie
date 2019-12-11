<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\VendedorsExport;
use App\Exports\ClientesExport;
use App\Exports\TiendasExport;
use App\Exports\MegustasExport;
use App\Exports\ProductosExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

// use DB;

class ReporteController extends Controller
{
    public function reportes()
    {
        return \view('admin.reportes');
    }
    public function downUsers(Request $request)
    {
        // dd($request->fecha_ini_user);
        $inicio = Carbon::parse($request->fecha_ini_user)->toDateTimeString();
        $fin = Carbon::parse($request->fecha_fin_user)->toDateTimeString();
        // dd($inicio);
        return Excel::download(new UsersExport($inicio, $fin), 'users.xlsx');
    }
    public function downVendedores(Request $request)
    {
        $inicio = Carbon::parse($request->fecha_ini_vend)->toDateTimeString();
        $fin = Carbon::parse($request->fecha_fin_vend)->toDateTimeString();
        return Excel::download(new VendedorsExport($inicio, $fin), 'vendedores.xlsx');
    }
    public function downClientes(Request $request)
    {
        $inicio = Carbon::parse($request->fecha_ini_cli)->toDateTimeString();
        $fin = Carbon::parse($request->fecha_fin_cli)->toDateTimeString();
        // dd($fin);
        return Excel::download(new ClientesExport($inicio, $fin), 'clientes.xlsx');
    }
    public function downTiendas(Request $request)
    {
        // dd($request->fecha_ini_tienda);
        $inicio = Carbon::parse($request->fecha_ini_tienda)->toDateTimeString();
        $fin = Carbon::parse($request->fecha_fin_tienda)->toDateTimeString();
        // dd($inicio);
        return Excel::download(new TiendasExport($inicio, $fin), 'tiendas.xlsx');
    }
    public function downMegustas(Request $request)
    {
        $inicio = Carbon::parse($request->fecha_ini_megusta)->toDateTimeString();
        $fin = Carbon::parse($request->fecha_fin_megusta)->toDateTimeString();
        return Excel::download(new MegustasExport($inicio, $fin), 'megustas.xlsx');
    }
    public function downProductos(Request $request)
    {
        $inicio = Carbon::parse($request->fecha_ini_prod)->toDateTimeString();
        $fin = Carbon::parse($request->fecha_fin_prod)->toDateTimeString();
        return Excel::download(new ProductosExport($inicio, $fin), 'productos.xlsx');
    }
}
