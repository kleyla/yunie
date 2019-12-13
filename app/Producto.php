<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Imagen;
use App\Megusta;
use App\MegustaPub;
use App\CompartirPub;
use App\ComentarPub;
use Illuminate\Support\Facades\DB;


class Producto extends Model
{
    protected $table = 'productos';

    public function getProduto()
    {
        # code...
    }
    public static function getImagenes($idp)
    {
        $imagenes = Imagen::where('id_producto', $idp)->get();
        return $imagenes;
    }
    public static function getMegustas($idp)
    {
        $megustas = MegustaPub::where('id_publicacion', $idp)->count();
        return $megustas;
    }
    public static function getCompartirs($idp)
    {
        $compartirs = CompartirPub::where('id_publicacion', $idp)->count();
        return $compartirs;
    }
    public static function getComentarios($idp)
    {
        return $comentarios = ComentarPub::where('id_publicacion', $idp)->count();
    }
    public static function enCarrito($id_cliente,$id_producto){
        $producto=DB::select('SELECT productos.id,productos.nombre 
        from carritoproductos, productos, clientes, carritos
        where carritoproductos.id_producto=productos.id
        and carritoproductos.id_carrito=carritos.id
        and carritos.id_cliente=clientes.id
        and clientes.id=?
        and productos.id=?',[$id_cliente,$id_producto]);
        $empty=[];
   
        if($producto!==$empty){
            return true;
        }else{
            return false;
        }
    }

    public static function enListaDeseos($id_cliente,$id_producto){
        $producto=DB::select('SELECT productos.id,productos.nombre
        from listaproductos, productos, clientes, listadeseos
        where listaproductos.id_producto=productos.id
        and listaproductos.id_listadeseo=listadeseos.id
        and listadeseos.id_cliente=clientes.id
        and clientes.id=?
        and productos.id=?',[$id_cliente,$id_producto]);
        $empty=[];
   
        if($producto!==$empty){
            return true;
        }else{
            return false;
        }
    }
    
}
