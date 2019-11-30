<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'accesorios femeninos',
            'descripcion' => 'Accesorios complementarios femeninos',
            'foto' => 'categoria01.png',
            'created_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'celular',
            'descripcion' => 'Telefonos celulares',
            'foto' => 'categoria02.png',
            'created_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'ropa',
            'descripcion' => 'Ropa de todo tipo',
            'foto' => 'categoria03.png',
            'created_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'zapatos',
            'descripcion' => 'Zapatos',
            'foto' => 'categoria04.png',
            'created_at' => now(),
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Tenis',
            'descripcion' => 'Tenes deportivos',
            'foto' => 'categoria04.png',
            'created_at' => now(),
        ]);
    }
}
