<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Imagen;
use App\Megusta;
use App\MegustaPub;
use App\CompartirPub;
use App\ComentarPub;

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
}
