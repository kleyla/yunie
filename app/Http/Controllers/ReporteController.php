<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\VendedorsExport;
use App\Exports\ClientesExport;
use App\Exports\TiendasExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class ReporteController extends Controller
{
    public function reportes()
    {
        return \view('admin.reportes');
    }
    public function downUsers()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function downVendedores()
    {
        return Excel::download(new VendedorsExport, 'vendedores.xlsx');
    }
    public function downClientes()
    {
        return Excel::download(new ClientesExport, 'clientes.xlsx');
    }
    public function downTiendas()
    {
        return Excel::download(new TiendasExport, 'tiendas.xlsx');
    }
}
