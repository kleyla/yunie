<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'Manillas',
            'descripcion' => 'Bellas manillas de plata',
            'precio' => 40.00,
            'stock' => 50,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 1,
            'id_tienda' => 1,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Aretes',
            'descripcion' => 'Bellas aretes de plata',
            'precio' => 20.00,
            'stock' => 30,
            'mainFoto' => 'aros01.jpeg',
            'id_categoria' => 1,
            'id_tienda' => 1,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Cinturones de cuero',
            'descripcion' => 'Bellas cinturones de cuero',
            'precio' => 50.00,
            'stock' => 40,
            'mainFoto' => 'cinturon01.jpeg',
            'id_categoria' => 1,
            'id_tienda' => 1,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Collar',
            'descripcion' => 'Bellos collares de plata y oro',
            'precio' => 80.00,
            'stock' => 50,
            'mainFoto' => 'collar01.jpeg',
            'id_categoria' => 1,
            'id_tienda' => 1,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Celular Xiaomi note 5',
            'descripcion' => 'Smartphone de buena calidad. Ram 4 Gb, Memoria 64 Gb',
            'precio' => 1200.00,
            'stock' => 50,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 2,
            'id_tienda' => 2,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Celular Xiaomi note 7',
            'descripcion' => 'Smartphone de buena calidad, Ram 4 Gb, Memoria 64 Gb',
            'precio' => 1500.00,
            'stock' => 50,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 2,
            'id_tienda' => 2,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Celular Samsung A4',
            'descripcion' => 'Smartphone de buena calidad, Ram 4 Gb, Memoria 64 Gb',
            'precio' => 1600.00,
            'stock' => 40,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 2,
            'id_tienda' => 2,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Celular Samsung A6',
            'descripcion' => 'Smartphone de buena calidad, Ram 4 Gb, Memoria 64 Gb',
            'precio' => 1800.00,
            'stock' => 30,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 2,
            'id_tienda' => 2,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Poleras',
            'descripcion' => 'Poleras nike',
            'precio' => 80,
            'stock' => 100,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 3,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Blusas',
            'descripcion' => 'Bellas blusas en tonos pastel',
            'precio' => 100,
            'stock' => 50,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 3,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Pantalones',
            'descripcion' => 'Pantalones a la cintura',
            'precio' => 150,
            'stock' => 50,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 3,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Pantalones',
            'descripcion' => 'Pantalones a la cadera',
            'precio' => 140,
            'stock' => 70,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 3,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Zapatos de cuero',
            'descripcion' => 'Bellos zapatos a la moda',
            'precio' => 200,
            'stock' => 50,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 4,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Tacones',
            'descripcion' => 'Bellos zapatos de tacon a la moda',
            'precio' => 250,
            'stock' => 50,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 4,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Zapatos de vestir de varon',
            'descripcion' => 'Zapatos de vestir para varon',
            'precio' => 220,
            'stock' => 50,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 4,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Zapatillas',
            'descripcion' => 'Bellos zapatillas juveniles',
            'precio' => 150,
            'stock' => 40,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 5,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Tenis Nike',
            'descripcion' => 'Bellos tenis depoetivas',
            'precio' => 160,
            'stock' => 40,
            'mainFoto' => 'manilla01.jpeg',
            'id_categoria' => 5,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
    }
}
