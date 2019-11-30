<?php

use Illuminate\Database\Seeder;

class ComentarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            'cant_monedas' => 4,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Muy buen producto',
            'id_cliente' => 1,
            'id_publicacion' => 1,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Lo quiero',
            'id_cliente' => 1,
            'id_publicacion' => 2,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Ame',
            'id_cliente' => 2,
            'id_publicacion' => 2,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Muy buen producto!',
            'id_cliente' => 3,
            'id_publicacion' => 1,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'omg!',
            'id_cliente' => 3,
            'id_publicacion' => 2,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
    }
}
