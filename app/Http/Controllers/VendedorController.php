<?php

namespace App\Http\Controllers;

use App\Tienda;
use App\User;
use App\Vendedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Traits\ActivityTraits;

class VendedorController extends Controller
{
    use ActivityTraits;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = DB::table('vendedors')->where('estado', true)->get();
        // dd($vendedores);
        $usuarios = DB::table('users')->where('estado', true)->where('id_permiso', 2)->get();
        return view('admin.vendedores.vendedores', \compact('vendedores', 'usuarios'));
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
        $vendedor = new Vendedor();
        $vendedor->nombres = $request->nombres;
        $vendedor->apellidos =  $request->apellidos;
        $vendedor->fecha_nac = $request->fecha_nac;
        $vendedor->direccion = $request->direccion;
        $vendedor->telefono = $request->telefono;
        $vendedor->id_user = $request->usuario;
        $vendedor->save();
        $settingParms = $vendedor->toArray();
        $model = 'un vendedor';
        $this->logCreatedActivity($vendedor, $request, $settingParms, $model);

        $request->session()->flash('alert-success', 'Vendedor guardado con exito!');
        return \redirect()->route('vendedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function show($idv)
    {
        $vendedor = Vendedor::find($idv);
        // dd($vendedor);
        if ($vendedor != null) {
            $usuario = User::find($vendedor->id_user);
            $tiendas = DB::table('tiendas')->where('id_vendedor', $vendedor->id)->get();
            return \view('admin.vendedores.verVendedor', \compact('vendedor', 'usuario', 'tiendas'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function edit($idv)
    {
        $vendedor = Vendedor::find($idv);
        // dd($vendedor)
        if ($vendedor != null) {
            $usuario = User::find($vendedor->id_user);
            return \view('admin.vendedores.editVendedor', compact('vendedor', 'usuario'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idv)
    {
        $vendedor = Vendedor::find($idv);
        // dd($vendedor);
        if ($vendedor != null) {
            $vendedor->nombres = $request->nombres;
            $vendedor->apellidos =  $request->apellidos;
            $vendedor->fecha_nac = $request->fecha_nac;
            $vendedor->direccion = $request->direccion;
            $vendedor->telefono = $request->telefono;
            $vendedor->save();
            $request->session()->flash('alert-success', 'Vendedor actualizado con exito!');
            return \redirect()->route('editVendedor', $vendedor->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $idv)
    {
        $vendedor = Vendedor::find($idv);
        if ($vendedor != null) {
            $vendedor->estado = false;
            $vendedor->save();
            $request->session()->flash('alert-danger', 'Vendedor guardado con exito!');
            return \redirect()->route('vendedores');
        }
    }
    // SOLO PARA VENDEDORES
    public function miPerfilVendedor()
    {
        $vendedor = DB::table('vendedors')->where('id_user', Auth::user()->id)->first();
        $usuario = User::find(Auth::user()->id);
        if ($vendedor != null) {
            $tiendas = DB::table('tiendas')->where('id_vendedor', $vendedor->id)->get();
            return \view('vendedor.miPerfilVendedor', compact('vendedor', 'usuario', 'tiendas'));
        }
    }

    public function misTiendas()
    {
        $vendedor = DB::table('vendedors')->where('id_user', Auth::user()->id)->first();
        $usuario = User::find(Auth::user()->id);
        if ($vendedor != null) {
            $tiendas = DB::table('tiendas')->where('id_vendedor', $vendedor->id)->get();
            return \view('vendedor.misTiendas', \compact('vendedor', 'usuario', 'tiendas'));
        }
    }
    public function misProductos()
    {
        $vendedor = DB::table('vendedors')->where('id_user', Auth::user()->id)->first();
        if ($vendedor != null) {
            $productos = DB::select("select productos.*
            from productos, tiendas
            where tiendas.id = productos.id_tienda and
                tiendas.id_vendedor = $vendedor->id");
            // dd($productos);
            $categorias = DB::table('categorias')->where('estado', true)->get();
            return \view('vendedor.misProductos', compact('productos', 'categorias'));
        }
        $categorias = [];
        $productos = [];
        return \view('vendedor.misProductos', compact('productos', 'categorias'));
    }
    public function newProductoVendedor()
    {
        $vendedor = DB::table('vendedors')->where('id_user', Auth::user()->id)->first();
        $categorias = DB::table('categorias')->where('estado', true)->get();
        $tiendas = DB::table('tiendas')->where('estado', true)->where('id_vendedor', $vendedor->id)->get();
        return \view('vendedor.newProductoVendedor', compact('categorias', 'tiendas'));
    }
    public function misPublicaciones()
    {
        $vendedor = DB::table('vendedors')->where('id_user', Auth::user()->id)->first();
        if ($vendedor != null) {
            $publicaciones = DB::select("select publicacions.*, productos.id as idp, productos.nombre
            from publicacions, productos, tiendas
            where productos.id = publicacions.id_producto and
                productos.id_tienda = tiendas.id and
                tiendas.id_vendedor = $vendedor->id and
                publicacions.estado = true");
            $productos = DB::select("select productos.*
                from productos, tiendas
                where tiendas.id = productos.id_tienda and
                    tiendas.id_vendedor = $vendedor->id");
            // dd($publicaciones);
            // return $productos;
            return \view('vendedor.misPublicaciones', \compact('publicaciones', 'productos'));
        }
    }
    public function misInteracciones()
    {
        return \view('vendedor.misInteracciones');
    }
    public function misMegustas()
    {
        $vendedor = DB::table('vendedors')->where('id_user', Auth::user()->id)->first();
        if ($vendedor != null) {
            $megustas = DB::select("select publicacions.*, productos.id as idp, productos.nombre, clientes.nombres, megusta_pubs.created_at as fecha
                from megusta_pubs, productos, tiendas, publicacions, clientes
                where megusta_pubs.id_publicacion = publicacions.id and
                    publicacions.id_producto = productos.id and
                    productos.id_tienda = tiendas.id and
                    tiendas.id_vendedor = $vendedor->id and
                    megusta_pubs.id_cliente = clientes.id");
            // dd($megustas);
            return \view('vendedor.misMegustas', compact('megustas'));
        }
    }
    public function misCompartirs()
    {
        $vendedor = DB::table('vendedors')->where('id_user', Auth::user()->id)->first();
        if ($vendedor != null) {
            $compartirs = DB::select("select publicacions.*, productos.id as idp, productos.nombre, clientes.nombres, compartir_pubs.created_at as fecha, compartir_pubs.descripcion as comentario
                from compartir_pubs, productos, tiendas, publicacions, clientes
                where compartir_pubs.id_publicacion = publicacions.id and
                    publicacions.id_producto = productos.id and
                    productos.id_tienda = tiendas.id and
                    tiendas.id_vendedor = $vendedor->id and
                    compartir_pubs.id_cliente = clientes.id");
            // dd($compartirs);
            return \view('vendedor.misCompartirs', compact('compartirs'));
        }
    }
    public function misComentarios()
    {
        $vendedor = DB::table('vendedors')->where('id_user', Auth::user()->id)->first();
        if ($vendedor != null) {
            $comentarios = DB::select("select publicacions.*, productos.id as idp, productos.nombre, clientes.nombres, comentar_pubs.created_at as fecha, comentar_pubs.descripcion as comentario
                from comentar_pubs, productos, tiendas, publicacions, clientes
                where comentar_pubs.id_publicacion = publicacions.id and
                    publicacions.id_producto = productos.id and
                    productos.id_tienda = tiendas.id and
                    tiendas.id_vendedor = $vendedor->id and
                    comentar_pubs.id_cliente = clientes.id");
            // dd($comentarios);
            return \view('vendedor.misComentarios', compact('comentarios'));
        }
    }
}
