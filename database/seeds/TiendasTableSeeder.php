<?php

use Illuminate\Database\Seeder;

class TiendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('ubicacions')->insert([
            'latitud' => '17.780780593455393',
            'longitud' => '-63.196582976673085',
            'created_at' => now(),
        ]);
        DB::table('ubicacions')->insert([
            'latitud' => '-17.78200016485102',
            'longitud' => '-63.19092009085841',
            'created_at' => now(),
        ]);
        DB::table('ubicacions')->insert([
            'latitud' => '-17.78936799350305',
            'longitud' => '-63.18452764419169',
            'created_at' => now(),
        ]);
        DB::table('ubicacions')->insert([
            'latitud' => '17.780780593455393',
            'longitud' => '-63.196582976673085',
            'created_at' => now(),
        ]);
        DB::table('ubicacions')->insert([
            'latitud' => '-17.78200016485102',
            'longitud' => '-63.19092009085841',
            'created_at' => now(),
        ]);
        DB::table('ubicacions')->insert([
            'latitud' => '-17.78936799350305',
            'longitud' => '-63.18452764419169',
            'created_at' => now(),
        ]);
        DB::table('ubicacions')->insert([
            'latitud' => '17.780780593455393',
            'longitud' => '-63.196582976673085',
            'created_at' => now(),
        ]);
        DB::table('ubicacions')->insert([
            'latitud' => '-17.78200016485102',
            'longitud' => '-63.19092009085841',
            'created_at' => now(),
        ]);
        DB::table('ubicacions')->insert([
            'latitud' => '17.780780593455393',
            'longitud' => '-63.196582976673085',
            'created_at' => now(),
        ]);

        DB::table('tiendas')->insert([
            'nombre' => 'Diker bo',
            'nit' => 5684561,
            'direccion' => 'c/monasterio',
            'telefono' => '7754665',
            'foto' => 'joyas.jpeg',
            'id_vendedor' => 1,
            'created_at' => now(),
            'id_ubicacion' => 1,
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Phones',
            'nit' => 9845561,
            'direccion' => 'c/suarez',
            'telefono' => '65168523',
            'foto' => 'phones.jpg',
            'id_vendedor' => 2,
            'created_at' => now(),
            'id_ubicacion' => 2,
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Zara',
            'nit' => 321586565,
            'direccion' => 'c/alameda junin',
            'telefono' => '60005556',
            'foto' => 'ropa.jpeg',
            'id_vendedor' => 3,
            'created_at' => now(),
            'id_ubicacion' => 3,
        ]);
        //A partir de aqui se agregan nuevos seed´s
        // tienda 4
        DB::table('tiendas')->insert([
            'nombre' => 'Columbia',
            'nit' => 321586565,
            'direccion' => 'c/chile y forus',
            'telefono' => '60005556',
            'foto' => 'columbia.jpg',
            'id_vendedor' => 4,
            'created_at' => now(),
            'id_ubicacion' => 4,
        ]);
        // tienda 5
        DB::table('tiendas')->insert([
            'nombre' => 'Adidas',
            'nit' => 321586565,
            'direccion' => 'c/americas',
            'telefono' => '60005556',
            'foto' => 'adidas.jpg',
            'id_vendedor' => 4,
            'created_at' => now(),
            'id_ubicacion' => 5,
        ]);
        // tienda 6
        DB::table('tiendas')->insert([
            'nombre' => 'GameStop',
            'nit' => 321586565,
            'direccion' => 'c/americas',
            'telefono' => '60005556',
            'foto' => 'gamestop.jpg',
            'id_vendedor' => 4,
            'created_at' => now(),
            'id_ubicacion' => 6,
        ]);
        // tienda 7
        DB::table('tiendas')->insert([
            'nombre' => 'The limited',
            'nit' => 321586565,
            'direccion' => 'Cine center 2do anillo',
            'telefono' => '60005556',
            'foto' => 'the-limited.jpg',
            'id_vendedor' => 5,
            'created_at' => now(),
            'id_ubicacion' => 7,
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Deportes',
            'nit' => 321586565,
            'direccion' => 'c/americas',
            'telefono' => '60005556',
            'foto' => 'deportes.jpg',
            'id_vendedor' => 5,
            'created_at' => now(),
            'id_ubicacion' => 8,
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'venca',
            'nit' => 321586565,
            'direccion' => 'c/americas',
            'telefono' => '60005556',
            'foto' => 'venca.jpg',
            'id_vendedor' => 5,
            'created_at' => now(),
            'id_ubicacion' => 9,
        ]);
    }
}
