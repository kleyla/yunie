<?php

use Illuminate\Database\Seeder;

class ListadeseosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listadeseos')->insert([
            'id_cliente' => 1,
            'created_at' => now(),
        ]);
        DB::table('listadeseos')->insert([
            'id_cliente' => 2,
            'created_at' => now(),
        ]);
        DB::table('listadeseos')->insert([
            'id_cliente' => 3,
            'created_at' => now(),
        ]);
        DB::table('listaproductos')->insert([
            'id_producto' => 1,
            'id_listadeseo' => 1,
            'created_at' => now(),
        ]);
        DB::table('listaproductos')->insert([
            'id_producto' => 2,
            'id_listadeseo' => 1,
            'created_at' => now(),
        ]);
        DB::table('listaproductos')->insert([
            'id_producto' => 3,
            'id_listadeseo' => 2,
            'created_at' => now(),
        ]);
        DB::table('listaproductos')->insert([
            'id_producto' => 4,
            'id_listadeseo' => 2,
            'created_at' => now(),
        ]);
        DB::table('listaproductos')->insert([
            'id_producto' => 10,
            'id_listadeseo' => 3,
            'created_at' => now(),
        ]);
        DB::table('listaproductos')->insert([
            'id_producto' => 9,
            'id_listadeseo' => 3,
            'created_at' => now(),
        ]);
    }
}
