<?php

use Illuminate\Database\Seeder;

class ImagenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imagens')->insert([
            'imagen' => 'manilla01.jpeg',
            'id_producto' => 1,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'manilla02.jpeg',
            'id_producto' => 1,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'manilla03.jpeg',
            'id_producto' => 1,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'aros01.jpeg',
            'id_producto' => 2,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'aros02.jpeg',
            'id_producto' => 2,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'aros03.jpeg',
            'id_producto' => 2,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'cinturon01.jpeg',
            'id_producto' => 3,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'cinturon02.jpeg',
            'id_producto' => 3,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'cinturon03.jpeg',
            'id_producto' => 3,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'collar01.jpeg',
            'id_producto' => 4,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'collar02.jpeg',
            'id_producto' => 4,
            'created_at' => now(),
        ]);


        // añadiendo las imagenes de los productos nuevos seed's
        DB::table('imagens')->insert([
            'imagen' => 'ropamen1.jpg',
            'id_producto' => 18,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropamen1-1.jpg',
            'id_producto' => 18,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropamen1-2.jpg',
            'id_producto' => 18,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropamen2.jpg',
            'id_producto' => 19,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropamen2-1.jpg',
            'id_producto' => 19,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropamen2-2.jpg',
            'id_producto' => 19,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropamen2-3.jpg',
            'id_producto' => 19,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropamen2-4.jpg',
            'id_producto' => 19,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropawomen1.jpg',
            'id_producto' => 20,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropawomen1-1.jpg',
            'id_producto' => 20,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropawomen1-2.jpg',
            'id_producto' => 20,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropawomen1-3.jpg',
            'id_producto' => 20,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropawomen2.jpg',
            'id_producto' => 21,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropawomen2-1.jpg',
            'id_producto' => 21,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'ropawomen2-2.jpg',
            'id_producto' => 21,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'adidas1.jpg',
            'id_producto' => 22,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'adidas1-1.jpg',
            'id_producto' => 22,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'adidas1-2.jpg',
            'id_producto' => 22,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'adidas1-3.jpg',
            'id_producto' => 22,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'adidas2.jpg',
            'id_producto' => 23,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'adidas2-1.jpg',
            'id_producto' => 23,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'adidas2-2.jpg',
            'id_producto' => 23,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'adidas2-3.jpg',
            'id_producto' => 23,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'adidas3.jpg',
            'id_producto' => 24,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'adidas3-1.jpg',
            'id_producto' => 24,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'adidas3-2.jpg',
            'id_producto' => 24,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'adidas3-3.jpg',
            'id_producto' => 24,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'juegos1.jpg',
            'id_producto' => 25,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'juegos1-1.jpg',
            'id_producto' => 25,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'juegos1-2.jpg',
            'id_producto' => 25,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'juegos1-3.jpg',
            'id_producto' => 25,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'juegos2.jpg',
            'id_producto' => 26,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'juegos2-1.jpg',
            'id_producto' => 26,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'juegos2-2.jpg',
            'id_producto' => 26,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'juegos3.jpg',
            'id_producto' => 27,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'juegos3-1.jpg',
            'id_producto' => 27,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'juegos3-2.jpg',
            'id_producto' => 27,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'juegos3-3.jpg',
            'id_producto' => 27,
            'created_at' => now(),
        ]);
    }
}
