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

        //nuevos tags
        DB::table('tags')->insert([
            'nombre' => 'jean',
            'id_producto' => 12,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'moda',
            'id_producto' => 12,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'azul',
            'id_producto' => 12,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'juvenil',
            'id_producto' => 12,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'cuero',
            'id_producto' => 13,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'moda',
            'id_producto' => 13,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'negro',
            'id_producto' => 13,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'juvenil',
            'id_producto' => 13,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'femenino',
            'id_producto' => 14,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'moda',
            'id_producto' => 14,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'ocacion',
            'id_producto' => 14,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'belleza',
            'id_producto' => 14,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'cuero',
            'id_producto' => 15,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'estudiantes',
            'id_producto' => 15,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'negro',
            'id_producto' => 15,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'salidas',
            'id_producto' => 15,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'cuero',
            'id_producto' => 16,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'estudiantes',
            'id_producto' => 16,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'juvenil',
            'id_producto' => 16,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'salidas',
            'id_producto' => 16,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'tela',
            'id_producto' => 17,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'estudiantes',
            'id_producto' => 17,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'juvenil',
            'id_producto' => 17,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'salidas',
            'id_producto' => 17,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'sueter',
            'id_producto' => 18,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'invierno',
            'id_producto' => 18,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'frio',
            'id_producto' => 18,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'varonil',
            'id_producto' => 18,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'jean',
            'id_producto' => 19,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'adulto',
            'id_producto' => 19,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'moda',
            'id_producto' => 19,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'varonil',
            'id_producto' => 19,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'vestido',
            'id_producto' => 20,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'navidad',
            'id_producto' => 20,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'rojo',
            'id_producto' => 20,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'femenino',
            'id_producto' => 20,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'vestido',
            'id_producto' => 21,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'belleza',
            'id_producto' => 21,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'negro',
            'id_producto' => 21,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'femenino',
            'id_producto' => 21,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'zapatillas',
            'id_producto' => 22,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'deporte',
            'id_producto' => 22,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'negro',
            'id_producto' => 22,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'blanco',
            'id_producto' => 22,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'zapatillas',
            'id_producto' => 23,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'deporte',
            'id_producto' => 23,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'negro',
            'id_producto' => 23,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'blanco',
            'id_producto' => 23,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'zapatillas',
            'id_producto' => 24,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'deporte',
            'id_producto' => 24,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'adidas',
            'id_producto' => 24,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'blanco',
            'id_producto' => 24,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'familiar',
            'id_producto' => 25,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'juegos',
            'id_producto' => 25,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'infantil',
            'id_producto' => 25,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'entretenimiento',
            'id_producto' => 25,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'familiar',
            'id_producto' => 26,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'juegos',
            'id_producto' => 26,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'infantil',
            'id_producto' => 26,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'entretenimiento',
            'id_producto' => 26,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'familiar',
            'id_producto' => 27,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'juegos',
            'id_producto' => 27,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'infantil',
            'id_producto' => 27,
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'nombre' => 'entretenimiento',
            'id_producto' => 27,
            'created_at' => now(),
        ]);

    }
}
