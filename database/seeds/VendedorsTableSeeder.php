<?php

use Illuminate\Database\Seeder;

class VendedorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendedors')->insert([
            'nombres' => 'Pedro',
            'apellidos' => 'Terrazas',
            'telefono' => '604511551',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion' => 'c/salvatierra',
            'created_at' => now(),
            'id_user' => '3',
        ]);
        DB::table('vendedors')->insert([
            'nombres' => 'Angela',
            'apellidos' => 'Torrez',
            'telefono' => '7055156',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion' => 'c/Ernesto',
            'created_at' => now(),
            'id_user' => '4',
        ]);
        DB::table('vendedors')->insert([
            'nombres' => 'Jose',
            'apellidos' => 'Rodriguez',
            'telefono' => '7754665',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion' => 'c/monasterio',
            'created_at' => now(),
            'id_user' => '5',
        ]);
    }
}
