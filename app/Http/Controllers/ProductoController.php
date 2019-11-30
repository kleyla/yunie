<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Imagen;
use App\Tag;
use Illuminate\Http\Request;
use DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = DB::table('categorias')->where('estado', true)->get();
        $productos = DB::table('productos')->where('estado', true)->get();
        return \view('admin.productos.productos', compact('categorias', 'productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = DB::table('categorias')->where('estado', true)->get();
        $tiendas = DB::table('tiendas')->where('estado', true)->get();
        return \view('admin.productos.newProducto', compact('categorias', 'tiendas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        // dd($request->tags);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->id_categoria = $request->categoria;
        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $image) {
                $destinationPath = 'img/productos/';
                $filemane = $image->getClientOriginalName();
                $image->move($destinationPath, $filemane);
                $imagenProd = new Imagen();
                $imagenProd->imagen = $filemane;
                $imagenProd->id_producto = $producto->id;
                $imagenProd->save();
            }
        }
        $mainFoto = DB::table('imagens')->where('id_producto', $producto->id)->first();
        $producto->mainFoto = $mainFoto;
        $producto->save();
        $tags = $request->tags;
        $array = explode(",", $tags);
        // dd($array);
        foreach ($array as $tag1) {
            $newTag = new Tag();
            $newTag->nombre = $tag1;
            $newTag->id_producto = $producto->id;
            $newTag->save();
        }
        $request->session()->flash('alert-success', 'Producto guardado con exito!');
        return \redirect()->route('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($idp)
    {
        $producto = Producto::find($idp);
        $tags = DB::select("select tags.*
            from tags
            where tags.id_producto = $idp");
        $imagenes = DB::table('imagens')->where('estado', true)->where('id_producto', $idp)->get();
        $imagenMain = DB::table('imagens')->where('estado', true)->where('id_producto', $idp)->first();
        $categoria = DB::table('categorias')->where('estado', true)->where('id', $producto->id_categoria)->first();
        $tienda = DB::table('tiendas')->where('estado', true)->where('id', $producto->id_tienda)->first();
        $valoraciones = DB::select("select valoracions.*, clientes.nombres
            from valoracions, clientes
            where clientes.id = valoracions.id_cliente and
                valoracions.estado = true and
                valoracions.id_producto = $idp");
        // $promedio = DB::select("select AVG(valoracions.puntuaciones)
        //     from valoracions
        //     where valoracions.estado = true");
        $promedio = DB::table('valoracions')->where('estado', true)->avg('puntuaciones');
        // dd($promedio);

        return \view('admin.productos.verProducto', \compact('producto', 'tags', 'imagenes', 'imagenMain', 'categoria', 'tienda', 'valoraciones', 'promedio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($idp)
    {
        $producto = Producto::find($idp);
        if ($producto != null) {
            $categorias = DB::table('categorias')->where('estado', true)->get();
            $tagsPrd = DB::table('tags')->where('id_producto', $producto->id)->get();
            $tags = "";
            foreach ($tagsPrd as $tag) {
                $tags = $tags . ',' . $tag->nombre;
            }
            // dd($tags);
            $imagenes = DB::table('imagens')->where('id_producto', $producto->id)->get();
            return \view('admin.productos.editProducto', \compact('categorias', 'producto', 'tags', 'imagenes'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idp)
    {
        $producto = Producto::find($idp);
        if ($producto != null) {
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->precio = $request->precio;
            $producto->stock = $request->stock;
            $producto->id_categoria = $request->categoria;
            $producto->save();
            if ($request->hasFile('foto')) {
                foreach ($request->file('foto') as $image) {
                    $destinationPath = 'img/productos/';
                    $filemane = $image->getClientOriginalName();
                    $image->move($destinationPath, $filemane);
                    $imagenProd = new Imagen();
                    $imagenProd->imagen = $filemane;
                    $imagenProd->id_producto = $producto->id;
                    $imagenProd->save();
                }
            }
            $request->session()->flash('alert-success', 'Producto actualizado con exito!');
            return \redirect()->route('editProducto', $producto->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($idp)
    {
        $producto = Producto::find($idp);
        if ($producto != null) {
            $producto->estado = false;
            $producto->save();
            return \redirect()->route('productos');
        }
    }

    // APIS
    public function publicacionesApi()
    {
        $productos = DB::select("select productos.*, tiendas.id as idt, tiendas.nombre as tienda, tiendas.foto,
                publicacions.id as idp, publicacions.descripcion as descPub, publicacions.precio_oferta, publicacions.cant_monedas
            from productos, tiendas, publicacions
            where productos.id_tienda = tiendas.id and
                publicacions.id_producto = productos.id and
                productos.estado = true");
        // dd($productos);
        return response()->json($productos, 200);
    }

    public function images($fileName)
    {
        return \response()->download(public_path("/img/productos/$fileName"));
    }
    public function imageProducto($fileName)
    {
        return \response()->download(public_path("/img/productos/$fileName"));
    }
    public function imageTienda($fileName)
    {
        return \response()->download(public_path("/img/tiendas/$fileName"));
    }
}
