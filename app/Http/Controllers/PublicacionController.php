<?php

namespace App\Http\Controllers;

use PhpFanatic\clarifAI\ImageClient;
use Illuminate\Support\Facades\Auth;
use App\Publicacion;
use App\Comentario;
use App\Producto;
use Illuminate\Http\Request;
use App\ComentarPub;
use App\CompartirPub;
use App\User;
use App\Vendedor;
use App\Tienda;
use App\Cliente;
use App\Tag;
use Illuminate\Support\Facades\DB;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = DB::select("select publicacions.*, productos.id as idp, productos.nombre
            from publicacions, productos
            where productos.id = publicacions.id_producto and
                publicacions.estado = true");
        $productos = DB::table('productos')->where('estado', true)->get();
        // dd($publicaciones);
        return \view('admin.publicaciones.publicaciones', \compact('publicaciones', 'productos'));
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
        $publicacion = new Publicacion();
        $publicacion->descripcion = $request->descripcion;
        $publicacion->precio_oferta = $request->precio_oferta;
        $publicacion->cant_monedas = $request->cant_monedas;
        $publicacion->fecha_ini = $request->fecha_ini;
        $publicacion->fecha_fin = $request->fecha_fin;
        $publicacion->id_producto = $request->producto;
        $publicacion->save();
        $request->session()->flash('alert-success', 'Publicacion guardada con exito!');
        return \redirect()->route('publicaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show($idp)
    {
        $publicacion = Publicacion::find($idp);
        if ($publicacion != null) {
            $megustas = DB::table('megusta_pubs')->where('id_publicacion', $publicacion->id)->count();
            // dd($megustas);
            $compartirs = DB::table('compartir_pubs')->where('id_publicacion', $publicacion->id)->count();
            $comentarios = DB::table('comentar_pubs')->where('id_publicacion', $publicacion->id)->count();
            $comentarios_pub = DB::select("select comentar_pubs.*, clientes.nombres
                from comentar_pubs, clientes
                where comentar_pubs.id_cliente = clientes.id and
                    comentar_pubs.id_publicacion = $publicacion->id");
            // dd($comentarios_pub);
            $producto = DB::table('productos')->where('id', $publicacion->id_producto)->first();
            return \view('admin.publicaciones.verPublicacion', compact('publicacion', 'producto', 'megustas', 'compartirs', 'comentarios', 'comentarios_pub'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit($idp)
    {
        $publicacion = Publicacion::find($idp);
        if ($publicacion != null) {
            $producto = DB::table('productos')->where('id', $publicacion->id_producto)->first();
            return \view('admin.publicaciones.editPublicacion', compact('publicacion', 'producto'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idp)
    {
        $publicacion = Publicacion::find($idp);
        if ($publicacion != null) {
            $publicacion->descripcion = $request->descripcion;
            $publicacion->precio_oferta = $request->precio_oferta;
            $publicacion->cant_monedas = $request->cant_monedas;
            $publicacion->fecha_ini = $request->fecha_ini;
            $publicacion->fecha_fin = $request->fecha_fin;
            $publicacion->save();
            $request->session()->flash('alert-success', 'Publicacion actualizado con exito!');
            return \redirect()->route('editPublicacion', $publicacion->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $idp)
    {
        $publicacion = Publicacion::find($idp);
        if ($publicacion != null) {
            $publicacion->estado = false;
            $publicacion->save();
            $request->session()->flash('alert-danger', 'Publicacion elimninada con exito!');
            return \redirect()->route('publicaciones');
        }
    }

    // API
    public static function publicacionApi($idp)
    {
        $publicacion = Publicacion::find($idp);
        // dd($publicacion);
        // foreach ($publicacion as $publi) {
        // $publicacion->megustas = Producto::getMegustas($publicacion->id);
        // $publicacion->compartidos = Producto::getCompartirs($publicacion->id);
        // $publicacion->comentarios = Producto::getComentarios($publicacion->id);
        $publicacion->comentarios = Publicacion::getComentarios($publicacion->id);
        $publicacion->imagenes = Producto::getImagenes($publicacion->id_producto);

        // }
        return response()->json($publicacion, 200);
    }

    // No esta en uso esta api pero si sirve
    public static function publicacionListaVendedorApi($idv)
    {
        $vendedor = Vendedor::find($idv);
        $vendedor->publicaciones = Publicacion::getPublicacionbySeller($vendedor->id);
        return response()->json($vendedor, 200);
    }


    public static function publicacionListaTiendaApi($idv)
    {
        $tienda = Tienda::find($idv);
        $tienda->publicaciones = Publicacion::getPublicacionbyStore($tienda->id);
        return response()->json($tienda, 200);
    }

    public function publicacionListaClienteApi($idu)
    {

        $cliente = Cliente::find($idu);
        $cliente->publicaciones = Publicacion::getPublicacionbyUser($cliente->id);
        return response()->json($cliente, 200);
    }

    public function example2()
    {
        if (Auth::check()) { } else { }
    }

    public function publicacionComentarioAddApi(Request $request, $idp)
    {
        if ($request->descripcion == null) {
            return \response()->json("Descr");
        } else {
            $publicacion = Publicacion::find($idp);
            $user = User::where('id_firebase', $request->id_cliente)->first();
            $datoComentario = Comentario::orderBy('created_at', 'DESC')->first();
            if ($publicacion != null && $user != null) {
                $cliente = Cliente::where('id_user', $user->id)->first();
                if ($cliente != null) {
                    $comentario = new ComentarPub();
                    $comentario->descripcion = $request->descripcion;
                    $comentario->id_publicacion = $request->id_publicacion;
                    $comentario->id_cliente = $cliente->id;
                    $comentario->id_comentario = $datoComentario->id;
                    $comentario->save();
                    return \response()->json($comentario, 200);
                } else {
                    return \response()->json("Cliente");
                }
            } else {
                return \response()->json("Publi");
            }
        }
    }

    public function buscarApi(Request $request)
    {
        $client = new ImageClient('23cfeedf53b3466486817f265e3ac790');
        $client->SetLanguage('es');
        // $imagen = file_get_contents($request->photo);
        $imagen = $request->photo;
        $client->AddImage($imagen);
        $result = json_decode($client->Predict());
        // dd($result);
        // return $result;
        $names = $result->outputs[0]->data->concepts;
        $tags = array();
        foreach ($names as $name) {
            array_push($tags, $name->name);
        }
        return $tags;
        $productosTag = array();
        // $productos = Producto::where('estado', true)->get();
        // foreach ($productos as $producto) {
        //     $tagsProducto = Tag::where('id_producto', $producto->id)->get();
        //     foreach ($tagsProducto as $tagPro) {
        //         foreach ($tags as $tag) {
        //             if (strcmp($tagPro->nombre, $tag) == 0) {
        //                 array_push($productosTag, $producto);
        //                 // dd($productosTag);

        //             }
        //         }
        //     }
        // }
        $tagsPro = Tag::all();
        foreach ($tagsPro as $tagPro) {
            foreach ($tags as $tag) {
                // return $tagPro->nombre;
                if (strcmp($tag, $tagPro->nombre) == 0) {
                    // return $tagPro->id_producto;
                    array_push($productosTag, $tagPro->id_producto);
                }
            }
        }
        // return $productosTag;
        $idProductos = array_unique($productosTag);
        // dd($idProductos);
        // return $idProductos;
        // $productos = new stdClass();
        $productos = array();
        foreach ($idProductos as $idp) {
            $prod = Producto::find($idp);
            if ($prod->estado != null) {
                array_push($productos, $prod);
            }
        }
        // dd($productos);
        return \response()->json($productos, 200);
        // return $productos;
    }

    public function example()
    {
        $array = [1, 1, 2, 3, 3, 3];
        $tags = ['manilla', 'brazalete', 'mujer', 'aros', 'pendiente', 'correa', 'cinturon'];
        $tagsPro = Tag::all();
        $productosTag = array();

        foreach ($tagsPro as $tagPro) {
            foreach ($tags as $tag) {
                if (strcmp($tag, $tagPro->nombre) == 0) {
                    array_push($productosTag, $tagPro->id_producto);
                }
            }
        }
        // dd($productosTag);
        $idProductos = array_unique($productosTag);
        // dd($idProductos);
        $productos = array();
        foreach ($idProductos as $idp) {
            $prod = Producto::find($idp);

            array_push($productos, $prod);
        }
        // dd($productos);
        return $productos;
    }
}
