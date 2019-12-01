<?php

use Illuminate\Database\Seeder;

class CompartirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compartirs')->insert([
            'cant_monedas' => 3,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Muy buen producto',
            'id_cliente' => 1,
            'id_publicacion' => 1,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Lo quiero',
            'id_cliente' => 1,
            'id_publicacion' => 2,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Ame',
            'id_cliente' => 2,
            'id_publicacion' => 2,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Muy buen producto!',
            'id_cliente' => 3,
            'id_publicacion' => 1,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'omg!',
            'id_cliente' => 3,
            'id_publicacion' => 2,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        //nuevos seeds
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Muy buen producto',
            'id_cliente' => 4,
            'id_publicacion' => 15,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Lo quiero',
            'id_cliente' => 5,
            'id_publicacion' => 15,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Ame',
            'id_cliente' => 6,
            'id_publicacion' => 20,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Muy buen producto!',
            'id_cliente' => 6,
            'id_publicacion' => 21,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'omg!',
            'id_cliente' => 6,
            'id_publicacion' => 22,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);

        
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Ame',
            'id_cliente' => 8,
            'id_publicacion' => 15,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Muy buen producto!',
            'id_cliente' => 7,
            'id_publicacion' => 21,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'omg!',
            'id_cliente' => 7,
            'id_publicacion' => 22,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Ame',
            'id_cliente' => 6,
            'id_publicacion' => 10,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Muy buen producto!',
            'id_cliente' => 6,
            'id_publicacion' => 11,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'omg!',
            'id_cliente' => 6,
            'id_publicacion' => 12,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Ame',
            'id_cliente' => 1,
            'id_publicacion' => 24,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Muy buen producto!',
            'id_cliente' => 1,
            'id_publicacion' => 16,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'omg!',
            'id_cliente' => 2,
            'id_publicacion' => 19,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Ame',
            'id_cliente' => 3,
            'id_publicacion' => 20,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'Muy buen producto!',
            'id_cliente' => 2,
            'id_publicacion' => 2,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
        DB::table('compartir_pubs')->insert([
            'descripcion' => 'omg!',
            'id_cliente' => 8,
            'id_publicacion' => 14,
            'id_compartir' => 1,
            'created_at' => now(),
        ]);
    }
}
