<?php

namespace App;

use App\ComentarPub;
use App\CompartirPub;
use App\Cliente;
use App\Producto;
use App\Tienda;
use DB;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    public static function getComentarios($idp)
    {
        $comentarios = ComentarPub::where('id_publicacion', $idp)->get();
        foreach( $comentarios as $comentario){
            $cliente= Cliente::where('id', $comentario->id_cliente)->first();
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

    public static function getPublicacionbyUser($idp){
        $compartidos=CompartirPub::where('id_cliente',$idp)->orderBy('id_publicacion', 'DESC')->get();
             foreach($compartidos as $compartido){
                $publicacion = Publicacion::where('id',$compartido->id_publicacion)->first();
                $compartido->idPublicacion = $publicacion->id;
             }
        return $compartidos;
    }

    public static function getPublicacionbySeller($idv){
        $tiendas = DB::table('tiendas')
        ->join('productos','productos.id_tienda','=','tiendas.id')
        ->join('publicacions','publicacions.id_producto','=','productos.id')
        ->where('tiendas.id_vendedor','=',$idv)->orderBy('publicacions.id','DESC')->get();
        return $tiendas;
    }

    public static function getPublicacionbyStore($idv){
        $tiendas = DB::table('tiendas')
        ->join('productos','productos.id_tienda','=','tiendas.id')
        ->join('publicacions','publicacions.id_producto','=','productos.id')
        ->where('tiendas.id','=',$idv)->orderBy('publicacions.id','DESC')->get();
        foreach($tiendas as $tienda){
            $tienda->imagenes= Producto::getImagenes($tienda->id_producto);
          
        }
        return $tiendas;
    }
}
