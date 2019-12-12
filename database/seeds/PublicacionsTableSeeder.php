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
            'precio_oferta' => 0.38,
            'cant_monedas' => 5,
            'fecha_ini' => '2019-12-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 4,
            'descripcion' => 'Los collares estas muy baratos',
            'precio_oferta' => 0.38,
            'cant_monedas' => 5,
            'fecha_ini' => '2019-12-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 4,
            'descripcion' => 'Botamos la casa por la ventana',
            'precio_oferta' => 0.28,
            'cant_monedas' => 5,
            'fecha_ini' => '2020-01-05 23:54:26',
            'fecha_fin' => '2020-01-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 5,
            'descripcion' => 'Unete a la nueva era y la promo',
            'precio_oferta' => 0.29,
            'cant_monedas' => 4,
            'fecha_ini' => '2019-12-15 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 6,
            'descripcion' => 'Unete a la nueva era y la promo',
            'precio_oferta' => 0.13,
            'cant_monedas' => 3,
            'fecha_ini' => '2019-12-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 7,
            'descripcion' => 'Ven y aprovecha la oferta OMG',
            'precio_oferta' => 0.13,
            'cant_monedas' => 7,
            'fecha_ini' => '2019-11-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 8,
            'descripcion' => 'Unete a la nueva era y la promo',
            'precio_oferta' => 0.1300,
            'cant_monedas' => 4,
            'fecha_ini' => '2019-12-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 9,
            'descripcion' => 'Lindas poleras por esta increible promocion',
            'precio_oferta' => 0.30,
            'cant_monedas' => 3,
            'fecha_ini' => '2019-12-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 10,
            'descripcion' => 'Lindas blusas por esta increible promocion',
            'precio_oferta' => 0.10,
            'cant_monedas' => 3,
            'fecha_ini' => '2019-12-05 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 11,
            'descripcion' => 'Ajustate que esta regalado',
            'precio_oferta' => 0.100,
            'cant_monedas' => 5,
            'fecha_ini' => '2019-12-19 23:54:26',
            'fecha_fin' => '2019-12-23 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 12,
            'descripcion' => 'Ajustate que esta regalado',
            'precio_oferta' => 0.100,
            'cant_monedas' => 5,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 13,
            'descripcion' => 'zapatea porque esta regalado',
            'precio_oferta' => 0.50,
            'cant_monedas' => 3,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-31 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 14,
            'descripcion' => 'tacon tacon que has de probrar con esta promo',
            'precio_oferta' => 0.200,
            'cant_monedas' => 3,
            'fecha_ini' => '2019-09-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 15,
            'descripcion' => 'La jueventud pide promoción y se lo damos!!!',
            'precio_oferta' => 0.10,
            'cant_monedas' => 5,
            'fecha_ini' => '2019-08-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 16,
            'descripcion' => 'La jueventud pide promoción y se lo damos!!!',
            'precio_oferta' => 0.20,
            'cant_monedas' => 5,
            'fecha_ini' => '2019-08-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 17,
            'descripcion' => 'Ya llego la Promo!!',
            'precio_oferta' => 0.35,
            'cant_monedas' => 11,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 18,
            'descripcion' => 'Ya llego la Promo',
            'precio_oferta' => 0.30,
            'cant_monedas' => 10,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 19,
            'descripcion' => 'Ajustate que esta regalado',
            'precio_oferta' => 0.10,
            'cant_monedas' => 5,
            'fecha_ini' => '2019-12-25 23:54:26',
            'fecha_fin' => '2020-01-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 20,
            'descripcion' => 'Lograras conseguirlo a este precio, acepta la navidad',
            'precio_oferta' => 0.25,
            'cant_monedas' => 8,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 21,
            'descripcion' => 'Navidad!!!',
            'precio_oferta' => 0.25,
            'cant_monedas' => 10,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 22,
            'descripcion' => 'Apresurate, ya no queda mucho',
            'precio_oferta' => 0.25,
            'cant_monedas' => 6,
            'fecha_ini' => '2019-10-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 23,
            'descripcion' => 'No te quedes sin el tuyo',
            'precio_oferta' => 0.15,
            'cant_monedas' => 15,
            'fecha_ini' => '2019-09-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 24,
            'descripcion' => 'Ahora alza tu estilo y demuestra de que estas hecho',
            'precio_oferta' => 0.35,
            'cant_monedas' => 8,
            'fecha_ini' => '2019-09-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 25,
            'descripcion' => 'Ajustate que esta regalado',
            'precio_oferta' => 0.20,
            'cant_monedas' => 5,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 26,
            'descripcion' => 'Ajustate que esta regalado!!!',
            'precio_oferta' => 0.25,
            'cant_monedas' => 8,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);
        DB::table('publicacions')->insert([
            'id_producto' => 27,
            'descripcion' => 'Llega a casa con este divertida consola',
            'precio_oferta' => 0.150,
            'cant_monedas' => 6,
            'fecha_ini' => '2019-11-25 23:54:26',
            'fecha_fin' => '2019-12-25 23:54:26',
            'created_at' => now(),
        ]);

    }
}
