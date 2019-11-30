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
        
    }
}
