<?php

use Illuminate\Database\Seeder;

class CarritosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carritos')->insert([
            'monto' => 100,
            'id_cliente' => 1,
            'created_at' => now(),
        ]);
        DB::table('carritos')->insert([
            'monto' => 300,
            'id_cliente' => 2,
            'created_at' => now(),
        ]);
        DB::table('carritos')->insert([
            'monto' => 200,
            'id_cliente' => 3,
            'created_at' => now(),
        ]);
        DB::table('carritoproductos')->insert([
            'id_producto' => 1,
            'id_carrito' => 1,
            'cantidad' => 1,
            'subtotal' => 40,
            'created_at' => now(),
        ]);
        DB::table('carritoproductos')->insert([
            'id_producto' => 2,
            'id_carrito' => 1,
            'cantidad' => 2,
            'subtotal' => 40,
            'created_at' => now(),
        ]);
        DB::table('carritoproductos')->insert([
            'id_producto' => 3,
            'id_carrito' => 2,
            'cantidad' => 1,
            'subtotal' => 50,
            'created_at' => now(),
        ]);
        DB::table('carritoproductos')->insert([
            'id_producto' => 4,
            'id_carrito' => 2,
            'cantidad' => 1,
            'subtotal' => 80,
            'created_at' => now(),
        ]);
        DB::table('carritoproductos')->insert([
            'id_producto' => 9,
            'id_carrito' => 3,
            'cantidad' => 1,
            'subtotal' => 80,
            'created_at' => now(),
        ]);
    }
}
