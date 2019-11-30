<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'nombre' => 'manilla',
            'id_producto' => 1,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'brazalete',
            'id_producto' => 1,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'pulsera',
            'id_producto' => 1,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'femenino',
            'id_producto' => 1,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'mujer',
            'id_producto' => 1,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'chica',
            'id_producto' => 1,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'aros',
            'id_producto' => 2,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'pendiente',
            'id_producto' => 2,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'mujer',
            'id_producto' => 2,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'correa',
            'id_producto' => 3,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'cinturon',
            'id_producto' => 3,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'cenidor',
            'id_producto' => 3,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'collar',
            'id_producto' => 4,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'cadena',
            'id_producto' => 4,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'gargantilla',
            'id_producto' => 4,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'celular',
            'id_producto' => 5,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'tecnologia',
            'id_producto' => 5,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'celular',
            'id_producto' => 6,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'tecnologia',
            'id_producto' => 6,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'celular',
            'id_producto' => 7,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'tecnologia',
            'id_producto' => 7,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'celular',
            'id_producto' => 8,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'tecnologia',
            'id_producto' => 8,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'polera',
            'id_producto' => 9,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'deportivo',
            'id_producto' => 9,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'camiseta',
            'id_producto' => 9,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'blusa',
            'id_producto' => 10,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'mujer',
            'id_producto' => 10,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'pantalon',
            'id_producto' => 11,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'jean',
            'id_producto' => 11,
            'created_at' => now(),
        ]);
    }
}
