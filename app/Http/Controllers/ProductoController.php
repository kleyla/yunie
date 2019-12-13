<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Producto;
use App\Cliente;
use App\User;
use App\Moneda;
use App\Carritoproducto;
use App\Publicacion;
use App\Nota;
use App\Imagen;
use App\Tag;
use App\Detalle;
use App\Tienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpFanatic\clarifAI\ImageClient;


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
        $precio = DB::table('productos')->select('precio')->where('id', 1)->first();
        // dd($precio);
        // $total = 10.05;
        // $total = $total+$precio->precio;
        // dd($total);
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
        // dd($request->tienda);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->id_categoria = $request->categoria;
        $producto->id_tienda = $request->tienda;
        $producto->save();
        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $image) {
                // dd($image);
                $client = new ImageClient('23cfeedf53b3466486817f265e3ac790');
                $client->SetLanguage('es');
                $imagen = file_get_contents($image);
                $client->AddImage($imagen);
                $result = json_decode($client->Predict());
                // dd($result);
                if ($result != null) {
                    $names = $result->outputs[0]->data->concepts;
                    $tags = array();
                    foreach ($names as $name) {
                        array_push($tags, $name->name);
                    }
                    // dd($tags);
                    $i = 0;
                    while ($i < sizeof($tags)) {
                        $newTag = new Tag();
                        // dd($tags[$i]);
                        $newTag->nombre = $tags[$i];
                        $newTag->id_producto = $producto->id;
                        $newTag->save();
                        $i = $i + 1;
                    }
                }
                $destinationPath = 'img/productos/';
                $filemane = uniqid() . $image->getClientOriginalName();
                $image->move($destinationPath, $filemane);
                $imagenProd = new Imagen();
                $imagenProd->imagen = $filemane;
                $imagenProd->id_producto = $producto->id;
                $imagenProd->save();
            }
        }
        $mainFoto = DB::table('imagens')->where('id_producto', $producto->id)->first();
        // dd($mainFoto);
        $producto = Producto::find($producto->id);
        $producto->mainFoto = $mainFoto->imagen;
        $producto->save();
        // dd($producto);
        $tagss = $request->tags;
        $array = explode(",", $tagss);
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
        if ($valoraciones != null) {
            $promedio = DB::table('valoracions')->where('estado', true)->avg('puntuaciones');
            return \view('admin.productos.verProducto', \compact('producto', 'tags', 'imagenes', 'imagenMain', 'categoria', 'tienda', 'valoraciones', 'promedio'));
        } else {
            $promedio = 0;
            return \view('admin.productos.verProducto', \compact('producto', 'tags', 'imagenes', 'imagenMain', 'categoria', 'tienda', 'valoraciones', 'promedio'));
        }
        //
        // dd($promedio);
        //
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

    public function imagenAi()
    {
        $client = new ImageClient('23cfeedf53b3466486817f265e3ac790');
        // $client->AddImage('https://source.unsplash.com/umchkHwkdyM');
        $base64 = file_get_contents(public_path("/img/productos/aros01.jpeg"));

        $client->AddImage($base64);
        $client->SetLanguage('es');
        $result = json_decode($client->Predict());
        // dd($result);
        // dd($result->outputs[0]->data->concepts[0]->name);
        $names = $result->outputs[0]->data->concepts;
        $tags = array();

        foreach ($names as $name) {
            array_push($tags, $name->name);
        }
        dd($tags);
    }

    public function buscar(Request $request)
    {
        $buscar = $request->tag;
        // dd($buscar);
        $productos = Producto::where('estado', true)->get();
        $productosTag = array();
        foreach ($productos as $producto) {
            $tags = Tag::where('id_producto', $producto->id)->get();
            foreach ($tags as $tag) {
                if (strcmp($tag->nombre, $buscar) == 0) {
                    array_push($productosTag, $producto);
                    // dd($productosTag);
                }
            }
        }
        // dd($productosTag);
        return \view('admin.busqueda', \compact('productosTag'));
    }

    // APIS
    public function publicacionesApi($uid)
    {
        $user = User::where('id_firebase', $uid)->first();
        
        if ($user != null) {
            $cliente = Cliente::where('id_user', $user->id)->first();
            
            $productos = DB::select("SELECT DISTINCT(publicacions.id) as id, productos.id as idpro, productos.nombre, productos.descripcion,
            tiendas.id as idt, tiendas.nombre as tienda, tiendas.foto, publicacions.created_at,
                publicacions.descripcion as descPub, publicacions.precio_oferta, publicacions.cant_monedas
                from productos, tiendas, publicacions
            where productos.id_tienda = tiendas.id and
                publicacions.id_producto = productos.id and
                productos.estado = true and
                publicacions.estado = true
                order by publicacions.created_at DESC");

      
            foreach ($productos as $producto) {
                $producto->imagenes = Producto::getImagenes($producto->idpro);
                $producto->megustas = Producto::getMegustas($producto->id);
                $producto->compartidos = Producto::getCompartirs($producto->id);
                $producto->comentarios = Producto::getComentarios($producto->id);
                $producto->megusta = Publicacion::megusta($cliente->id, $producto->id);
                $producto->encarrito=Producto::enCarrito($cliente->id,$producto->idpro);
                $producto->enlista=Producto::enListaDeseos($cliente->id,$producto->idpro);
                // return $producto->idpro;
            }
            // dd($productos);
            return response()->json($productos, 200);
        }
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
    public function getProductosTiendaApi($idt)
    {
        $tienda = Tienda::find($idt);
        if ($tienda != null) {
            $productos = Producto::where('estado', true)
                ->where('id_tienda', $tienda->id)->get();
            foreach ($productos as $producto) {
                $producto->idt = $tienda->id;
                $producto->nombreTienda = $tienda->nombre;
                $producto->fotoTienda = $tienda->foto;
            }
            return response()->json($productos, 200);
            // dd($productos);
            foreach ($productos as $producto) {
                $producto->imagenes = Producto::getImagenes($producto->id);
                $producto->megustas = Producto::getMegustas($producto->idp);
                $producto->compartidos = Producto::getCompartirs($producto->idp);
                $producto->comentarios = Producto::getComentarios($producto->idp);
            }
            // dd($productos);
            return response()->json($productos, 200);
        }
    }
}
