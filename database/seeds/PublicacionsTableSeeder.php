<?php

use Illuminate\Database\Seeder;

class PublicacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publicacions')->insert([
            'id_producto' => 1,
            'descripcion' => 'Gran descuento!',
            'precio_oferta' => 0.10,
            'cant_monedas' => 5,
            'fecha_ini' => '2019-11-01 23:54:26',
            'fecha_fin' => '2019-11-10 23:54:26',
            'created_at' => now(),
        ]);

        DB::table('publicacions')->insert([
            'id_producto' => 2,
            'descripcion' => 'Gran descuento!',
            'precio_oferta' => 0.15,
            'cant_monedas' => 7,
            'fecha_ini' => '2019-11-05 23:54:26',
            'fecha_fin' => '2019-11-15 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 1,
            'descripcion' => 'Gran descuento!',
            'precio_oferta' => 0.10,
            'cant_monedas' => 5,
            'fecha_ini' => '2019-11-015 23:54:26',
            'fecha_fin' => '2019-11-25 23:54:26',
            'created_at' => now(),
        ]);
    }
}
