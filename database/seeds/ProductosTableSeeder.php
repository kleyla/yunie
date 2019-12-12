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
            'mainFoto' => 'note501.jpg',
            'id_categoria' => 2,
            'id_tienda' => 2,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Celular Xiaomi note 7',
            'descripcion' => 'Smartphone de buena calidad, Ram 4 Gb, Memoria 64 Gb',
            'precio' => 1500.00,
            'stock' => 50,
            'mainFoto' => 'note701.png',
            'id_categoria' => 2,
            'id_tienda' => 2,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Celular Samsung A4',
            'descripcion' => 'Smartphone de buena calidad, Ram 4 Gb, Memoria 64 Gb',
            'precio' => 1600.00,
            'stock' => 40,
            'mainFoto' => 'sam02.jpg',
            'id_categoria' => 2,
            'id_tienda' => 2,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Celular Samsung A6',
            'descripcion' => 'Smartphone de buena calidad, Ram 4 Gb, Memoria 64 Gb',
            'precio' => 1800.00,
            'stock' => 30,
            'mainFoto' => 'sam02.jpg',
            'id_categoria' => 2,
            'id_tienda' => 2,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Poleras',
            'descripcion' => 'Poleras nike',
            'precio' => 80,
            'stock' => 100,
            'mainFoto' => 'polera01.jpg',
            'id_categoria' => 3,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Blusas',
            'descripcion' => 'Bellas blusas en tonos pastel',
            'precio' => 100,
            'stock' => 50,
            'mainFoto' => 'blusa01.jpg',
            'id_categoria' => 3,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Pantalones',
            'descripcion' => 'Pantalones a la cintura',
            'precio' => 150,
            'stock' => 50,
            'mainFoto' => 'pantalon01.jpg',
            'id_categoria' => 3,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Pantalones de mujer',
            'descripcion' => 'Pantalones a la cadera',
            'precio' => 140,
            'stock' => 70,
            'mainFoto' => 'pantalonm01.jpg',
            'id_categoria' => 3,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Zapatos de cuero',
            'descripcion' => 'Bellos zapatos a la moda',
            'precio' => 200,
            'stock' => 50,
            'mainFoto' => 'zapatos01.jpg',
            'id_categoria' => 4,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Tacones',
            'descripcion' => 'Bellos zapatos de tacon a la moda',
            'precio' => 250,
            'stock' => 50,
            'mainFoto' => 'tacones01.jpg',
            'id_categoria' => 4,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Zapatos de vestir de varon',
            'descripcion' => 'Zapatos de vestir para varon',
            'precio' => 220,
            'stock' => 50,
            'mainFoto' => 'zapatosv01.jpeg',
            'id_categoria' => 4,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Zapatillas',
            'descripcion' => 'Bellos zapatillas juveniles',
            'precio' => 150,
            'stock' => 40,
            'mainFoto' => 'zapatillas01.jpeg',
            'id_categoria' => 5,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Tenis Nike',
            'descripcion' => 'Bellos tenis depoetivas',
            'precio' => 160,
            'stock' => 40,
            'mainFoto' => 'nike01.jpg',
            'id_categoria' => 5,
            'id_tienda' => 3,
            'created_at' => now(),
        ]);
        // A partir de aqui se agregan nuevos seed's
        //18
        DB::table('productos')->insert([
            'nombre' => 'Sueter California',
            'descripcion' => 'Hanes - Suéter de forro polar EcoSmart con capucha para hombre',
            'precio' => 110,
            'stock' => 25,
            'mainFoto' => 'ropamen1.jpg',
            'id_categoria' => 7,
            'id_tienda' => 4,
            'created_at' => now(),
        ]);
        //19
        DB::table('productos')->insert([
            'nombre' => 'pantalon levi',
            'descripcion' => 'Levis 505 pantalones vaqueros de ajuste regular para hombre',
            'precio' => 200,
            'stock' => 40,
            'mainFoto' => 'ropamen2.jpg',
            'id_categoria' => 7,
            'id_tienda' => 4,
            'created_at' => now(),
        ]);
        //20
        DB::table('productos')->insert([
            'nombre' => 'Vestido navidad',
            'descripcion' => 'Vestido de fiesta largo hasta la rodilla elegante Vintage con estampado de manga larga de Navidad para mujer 2019 Otoño Invierno vestido de Navidad Casual de talla grande',
            'precio' => 350,
            'stock' => 60,
            'mainFoto' => 'ropawomen1.jpg',
            'id_categoria' => 6,
            'id_tienda' => 4,
            'created_at' => now(),
        ]);
        // 21
        DB::table('productos')->insert([
            'nombre' => 'Macheda leoader',
            'descripcion' => 'Macheda Sexy tela de retazos y encaje con espalda al aire Bodysuit negro cuello redondo de manga larga mujeres delgadas Bodysuit Skinny Party Bodysuit 2018 nuevo',
            'precio' => 95,
            'stock' => 16,
            'mainFoto' => 'ropawomen2.jpg',
            'id_categoria' => 6,
            'id_tienda' => 4,
            'created_at' => now(),
        ]);
        // 22
        DB::table('productos')->insert([
            'nombre' => 'Adidas Superstar slip',
            'descripcion' => 'Adidas Superstar Slip Clover auténtico mujeres Skateboard zapatos cómodos transpirables antideslizantes zapatillas # S81340 S81337 S81338',
            'precio' => 580,
            'stock' => 16,
            'mainFoto' => 'adidas1.jpg',
            'id_categoria' => 10,
            'id_tienda' => 5,
            'created_at' => now(),
        ]);
        // 23
        DB::table('productos')->insert([
            'nombre' => 'Adidas UltraBoost',
            'descripcion' => 'Adidas UltraBoost UB4.0 zapatillas para correr para hombre transpirables de apoyo a la estabilidad zapatillas deportivas para hombre # BB6173/66/65/67',
            'precio' => 629,
            'stock' => 16,
            'mainFoto' => 'adidas2.jpg',
            'id_categoria' => 10,
            'id_tienda' => 5,
            'created_at' => now(),
        ]);
        // 24
        DB::table('productos')->insert([
            'nombre' => 'Zapatos autenticas adidas',
            'descripcion' => 'Adidas auténtica superestrella clásicos zapatos de skateboard para hombres originales antideslizantes zapatillas de deporte ligeras al aire libre # C77124',
            'precio' => 829,
            'stock' => 23,
            'mainFoto' => 'adidas3.jpg',
            'id_categoria' => 10,
            'id_tienda' => 5,
            'created_at' => now(),
        ]);
        // 25
        DB::table('productos')->insert([
            'nombre' => 'Auriculares Ps4',
            'descripcion' => 'Auriculares de juego de camuflaje para Ps4, auriculares para juegos, auriculares para Gaming con micrófono, teléfono portátil',
            'precio' => 73,
            'stock' => 23,
            'mainFoto' => 'juegos1.jpg',
            'id_categoria' => 11,
            'id_tienda' => 6,
            'created_at' => now(),
        ]);
        // 26
        DB::table('productos')->insert([
            'nombre' => 'Mini Consola 500 Games',
            'descripcion' => 'Mini consola de juegos de TV incorporada 500/620, reproductor de juegos de mano clásico Retro de 8 bits, salida AV, consola de videojuegos, juguetes, regalos',
            'precio' => 84,
            'stock' => 31,
            'mainFoto' => 'juegos2.jpg',
            'id_categoria' => 11,
            'id_tienda' => 6,
            'created_at' => now(),
        ]);
        // 27
        DB::table('productos')->insert([
            'nombre' => 'Consola dobre jostick',
            'descripcion' => '32/64/128 Bit 5 "7" LCD X9 plus doble rocker 16G consola de juegos Retro de mano Video MP5 TF tarjeta para juegos GBA/NES 10000',
            'precio' => 209,
            'stock' => 50,
            'mainFoto' => 'juegos3.jpg',
            'id_categoria' => 11,
            'id_tienda' => 6,
            'created_at' => now(),
        ]);
    }
}
