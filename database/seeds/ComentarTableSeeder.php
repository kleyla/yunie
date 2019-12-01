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
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 3,
            'id_publicacion' => 2,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 6,
            'id_publicacion' => 3,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 7,
            'id_publicacion' => 4,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 6,
            'id_publicacion' => 5,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 8,
            'id_publicacion' => 6,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 3,
            'id_publicacion' => 8,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 1,
            'id_publicacion' => 9,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Cuanto ultimo?',
            'id_cliente' => 2,
            'id_publicacion' => 11,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Cuanto ultimo?',
            'id_cliente' => 6,
            'id_publicacion' => 11,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Me podria avisar?',
            'id_cliente' => 6,
            'id_publicacion' => 11,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Cuanto ultimo?',
            'id_cliente' => 8,
            'id_publicacion' => 20,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Llevan hasta santa cruz?',
            'id_cliente' => 1,
            'id_publicacion' => 17,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Cuanto ultimo?',
            'id_cliente' => 3,
            'id_publicacion' => 17,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'lo recomiendo, yo tambien lo pedi',
            'id_cliente' => 5,
            'id_publicacion' => 15,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Cuanto ultimo?',
            'id_cliente' => 2,
            'id_publicacion' => 11,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        //cambiar
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Lo quiero',
            'id_cliente' => 1,
            'id_publicacion' => 22,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Ame',
            'id_cliente' => 7,
            'id_publicacion' => 22,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Muy buen producto!',
            'id_cliente' => 8,
            'id_publicacion' => 11,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'omg!',
            'id_cliente' => 4,
            'id_publicacion' => 17,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 1,
            'id_publicacion' => 12,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 6,
            'id_publicacion' => 13,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 7,
            'id_publicacion' => 14,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 5,
            'id_publicacion' => 5,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 8,
            'id_publicacion' => 16,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 1,
            'id_publicacion' => 18,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'me podria dar mas informacion por favor, imbox',
            'id_cliente' => 4,
            'id_publicacion' => 19,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Cuanto ultimo?',
            'id_cliente' => 2,
            'id_publicacion' => 11,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Cuanto ultimo?',
            'id_cliente' => 6,
            'id_publicacion' => 22,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Me podria avisar?',
            'id_cliente' => 5,
            'id_publicacion' => 16,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Cuanto ultimo?',
            'id_cliente' => 7,
            'id_publicacion' => 15,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Llevan hasta santa cruz?',
            'id_cliente' => 3,
            'id_publicacion' => 18,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Cuanto ultimo?',
            'id_cliente' => 4,
            'id_publicacion' => 14,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'lo recomiendo, yo tambien lo pedi',
            'id_cliente' => 5,
            'id_publicacion' => 16,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
        DB::table('comentar_pubs')->insert([
            'descripcion' => 'Cuanto ultimo?',
            'id_cliente' => 4,
            'id_publicacion' => 19,
            'id_comentario' => 1,
            'created_at' => now(),
        ]);
    }
}
