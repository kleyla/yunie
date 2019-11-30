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
    }
}
