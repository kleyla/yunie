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
        DB::table('publicacions')->insert([
            'id_producto' => 3,
            'descripcion' => 'Botamos la casa por la ventana',
            'precio_oferta' => 38.0,
            'cant_monedas' => 50,
            'fecha_ini' => '2019-12-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 4,
            'descripcion' => 'Los collares estas muy baratos',
            'precio_oferta' => 38.0,
            'cant_monedas' => 500,
            'fecha_ini' => '2019-12-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 4,
            'descripcion' => 'Botamos la casa por la ventana',
            'precio_oferta' => 28.0,
            'cant_monedas' => 550,
            'fecha_ini' => '2020-01-05 23:54:26',
            'fecha_fin' => '2020-01-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 5,
            'descripcion' => 'Unete a la nueva era y la promo',
            'precio_oferta' => 900.0,
            'cant_monedas' => 68,
            'fecha_ini' => '2019-12-15 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 6,
            'descripcion' => 'Unete a la nueva era y la promo',
            'precio_oferta' => 1300.0,
            'cant_monedas' => 90,
            'fecha_ini' => '2019-12-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 7,
            'descripcion' => 'Ven y aprovecha la oferta OMG',
            'precio_oferta' => 1300.0,
            'cant_monedas' => 120,
            'fecha_ini' => '2019-11-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 8,
            'descripcion' => 'Unete a la nueva era y la promo',
            'precio_oferta' => 1300.0,
            'cant_monedas' => 90,
            'fecha_ini' => '2019-12-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 9,
            'descripcion' => 'Lindas poleras por esta increible promocion',
            'precio_oferta' => 60.0,
            'cant_monedas' => 151,
            'fecha_ini' => '2019-12-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 11,
            'descripcion' => 'Ajustate que esta regalado',
            'precio_oferta' => 100.0,
            'cant_monedas' => 90,
            'fecha_ini' => '2019-12-19 23:54:26',
            'fecha_fin' => '2019-12-23 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 12,
            'descripcion' => 'Ajustate que esta regalado',
            'precio_oferta' => 100.0,
            'cant_monedas' => 65,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 13,
            'descripcion' => 'zapatea porque esta regalado',
            'precio_oferta' => 50.0,
            'cant_monedas' => 350,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-31 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 14,
            'descripcion' => 'tacon tacon que has de probrar con esta promo',
            'precio_oferta' => 200.0,
            'cant_monedas' => 120,
            'fecha_ini' => '2019-09-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 16,
            'descripcion' => 'La jueventud pide promoción y se lo damos!!!',
            'precio_oferta' => 100.0,
            'cant_monedas' => 210,
            'fecha_ini' => '2019-08-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 18,
            'descripcion' => 'Ya llego la Promo',
            'precio_oferta' => 90.0,
            'cant_monedas' => 65,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 19,
            'descripcion' => 'Ajustate que esta regalado',
            'precio_oferta' => 100.0,
            'cant_monedas' => 140,
            'fecha_ini' => '2019-12-25 23:54:26',
            'fecha_fin' => '2020-01-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 20,
            'descripcion' => 'Lograras conseguirlo a este precio, acepta la navidad',
            'precio_oferta' => 250.0,
            'cant_monedas' => 180,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 22,
            'descripcion' => 'Apresurate, ya no queda mucho',
            'precio_oferta' => 350.0,
            'cant_monedas' => 610,
            'fecha_ini' => '2019-10-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 23,
            'descripcion' => 'No te quedes sin el tuyo',
            'precio_oferta' => 450.0,
            'cant_monedas' => 700,
            'fecha_ini' => '2019-09-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 24,
            'descripcion' => 'Ahora alza tu estilo y demuestra de que estas hecho',
            'precio_oferta' => 650.0,
            'cant_monedas' => 800,
            'fecha_ini' => '2019-09-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 25,
            'descripcion' => 'Ajustate que esta regalado',
            'precio_oferta' => 20.0,
            'cant_monedas' => 65,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 27,
            'descripcion' => 'Llega a casa con este divertida consola',
            'precio_oferta' => 150.0,
            'cant_monedas' => 90,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        
    }
}
