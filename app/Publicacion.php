<?php

namespace App;

use App\ComentarPub;
use App\CompartirPub;
use App\Cliente;
use App\Producto;
use App\Tienda;
use App\Imagen;
use App\MegustaPub;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    public static function getComentarios($idp)
    {
        $comentarios = ComentarPub::where('id_publicacion', $idp)->get();
        foreach ($comentarios as $comentario) {
            $cliente = Cliente::where('id', $comentario->id_cliente)->first();
            $comentario->nombreCliente = $cliente->nombres;
            $comentario->idCliente = $cliente->id;
        }
        // $comentarios = DB::select("select clientes.*, comentar_pubs.descripcion as comentario
        //     from comentar_pubs, clientes
        //     where comentar_pubs.id_cliente and
        //         comentar_pubs.id_publicacion = $idp");
        // dd($comentarios);
        return $comentarios;
    }

    public static function getPublicacionbyUser($idc)
    {
        $compartidos = CompartirPub::where('id_cliente', $idc)
            ->orderBy('id_publicacion', 'DESC')->get();
        foreach ($compartidos as $compartido) {
            $publicacion = Publicacion::where('id', $compartido->id_publicacion)->first();
            $producto = Producto::find($publicacion->id_producto);
            $publicacion->producto = $producto;
            $publicacion->imagenes = Imagen::where('id_producto', $producto->id)->get();
            $compartido->publicacion = $publicacion;
            // $compartido->producto = $producto;
            $compartido->tienda = Tienda::find($producto->id_tienda);
        }
        return $compartidos;
    }


    public static function getPublicacionbySeller($idv)
    {
        $tiendas = DB::table('tiendas')
            ->join('productos', 'productos.id_tienda', '=', 'tiendas.id')
            ->join('publicacions', 'publicacions.id_producto', '=', 'productos.id')
            ->where('tiendas.id_vendedor', '=', $idv)->orderBy('publicacions.id', 'DESC')->get();
        return $tiendas;
    }

    public static function getPublicacionbyStore($idt)
    {
        $publicaciones = DB::table('tiendas')
            ->join('productos', 'productos.id_tienda', '=', 'tiendas.id')
            ->join('publicacions', 'publicacions.id_producto', '=', 'productos.id')
            ->where('tiendas.id', '=', $idt)->orderBy('publicacions.id', 'DESC')->get();
        foreach ($publicaciones as $tienda) {
            $tienda->imagenes = Producto::getImagenes($tienda->id_producto);
            $tienda->megustas = Producto::getMegustas($tienda->id_producto);
            $tienda->compartidos = Producto::getCompartirs($tienda->id_producto);
            $tienda->comentarios = Producto::getComentarios($tienda->id_producto);
        }
        return $publicaciones;
    }
    public static function megusta($idc, $idpu)
    {
        $megusta_pub = MegustaPub::where('id_cliente', $idc)
            ->where('id_publicacion', $idpu)->where('estado', true)->first();
        if ($megusta_pub != null) {
            //true
            return true;
        } else {
            return false;
        }
    }
}
