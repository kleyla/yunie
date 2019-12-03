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
        DB::table('imagens')->insert([
            'imagen' => 'note501.jpg',
            'id_producto' => 5,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'note701.png',
            'id_producto' => 5,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'note701.png',
            'id_producto' => 6,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'note702.jpg',
            'id_producto' => 6,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'sam02.jpg',
            'id_producto' => 7,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'sama01.jpg',
            'id_producto' => 7,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'sam02.jpg',
            'id_producto' => 8,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'sama01.jpg',
            'id_producto' => 8,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'polera01.jpg',
            'id_producto' => 9,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'polera02.jpeg',
            'id_producto' => 9,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'blusa01.jpg',
            'id_producto' => 10,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'blusa02.jpg',
            'id_producto' => 10,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'pantalon01.jpg',
            'id_producto' => 11,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'pantalon02.jpg',
            'id_producto' => 11,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'pantalonm01.jpg',
            'id_producto' => 12,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'pantalonm02.jpg',
            'id_producto' => 12,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'zapatos01.jpg',
            'id_producto' => 13,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'zapatos02.jpeg',
            'id_producto' => 13,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'tacones01.jpg',
            'id_producto' => 14,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'tacones02.jpg',
            'id_producto' => 14,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'zapatosv01.jpeg',
            'id_producto' => 15,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'zapatos02.jpeg',
            'id_producto' => 15,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'zapatillas01.jpeg',
            'id_producto' => 16,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'zapatillas02.jpeg',
            'id_producto' => 16,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'nike01.jpg',
            'id_producto' => 17,
            'created_at' => now(),
        ]);
        DB::table('imagens')->insert([
            'imagen' => 'nike02.jpg',
            'id_producto' => 17,
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
