<?php

namespace App;

use App\ComentarPub;
use App\Cliente;
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
}
