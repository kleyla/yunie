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
        // A partir de aqui se ingresaron los nuevos seeds
        // nro 6
        DB::table('categorias')->insert([
            'nombre' => 'Moda de mujeres',
            'descripcion' => 'Articulos para las personas femeninas',
            'foto' => 'categoria5.jpg',
            'created_at' => now(),
        ]);
        // 7
        DB::table('categorias')->insert([
            'nombre' => 'Moda de hombres',
            'descripcion' => 'Articulos para las personas masculinas',
            'foto' => 'categoria6.png',
            'created_at' => now(),
        ]);
        // 8
        DB::table('categorias')->insert([
            'nombre' => 'Salud y hogar',
            'descripcion' => 'Articulos para bebes, niños, para el hogar y cuidados personal',
            'foto' => 'categoria7.png',
            'created_at' => now(),
        ]);
        // 9
        DB::table('categorias')->insert([
            'nombre' => 'Smart Home',
            'descripcion' => 'Iluminacion, Cerraduras de puerta, termostatos, parlantes y demás',
            'foto' => 'categoria8.png',
            'created_at' => now(),
        ]);
        // 10
        DB::table('categorias')->insert([
            'nombre' => 'Deportes y aire libre',
            'descripcion' => 'Recreacion al aire libre y tiendas para aficionados',
            'foto' => 'categoria9.png',
            'created_at' => now(),
        ]);
        // 11
        DB::table('categorias')->insert([
            'nombre' => 'Videojuegos',
            'descripcion' => 'Consolas, Computadoras, Miniconsolas, juegos para niños y familiass',
            'foto' => 'categoria10.png',
            'created_at' => now(),
        ]);
        // 12
        DB::table('categorias')->insert([
            'nombre' => 'Insumos para mascotas',
            'descripcion' => 'Comida para aves, perros, gatos y todo tipo para mascotas',
            'foto' => 'categoria11.png',
            'created_at' => now(),
        ]);
    }
}
