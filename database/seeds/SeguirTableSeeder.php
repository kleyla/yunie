<?php

use Illuminate\Database\Seeder;

class SeguirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seguirs')->insert([
            'cant_monedas' => 5,
            'created_at' => now(),
        ]);
        // tiendas seguidas por clientes
        DB::table('seguir_tiendas')->insert([
            'id_cliente' => 1,
            'id_tienda' => 1,
            'id_seguir' => 1,
            'created_at' => now(),
        ]);
        DB::table('seguir_tiendas')->insert([
            'id_cliente' => 1,
            'id_tienda' => 2,
            'id_seguir' => 1,
            'created_at' => now(),
        ]);
        DB::table('seguir_tiendas')->insert([
            'id_cliente' => 2,
            'id_tienda' => 1,
            'id_seguir' => 1,
            'created_at' => now(),
        ]);
        DB::table('seguir_tiendas')->insert([
            'id_cliente' => 3,
            'id_tienda' => 3,
            'id_seguir' => 1,
            'created_at' => now(),
        ]);
        DB::table('seguir_tiendas')->insert([
            'id_cliente' => 3,
            'id_tienda' => 2,
            'id_seguir' => 1,
            'created_at' => now(),
        ]);
    }
}
