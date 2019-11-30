<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('clientes')->insert([
        //     'nombres'=> 'Leyla',
        //     'apellidos'=> 'Rodriguez',
        //     'telefono'=>'77049140',
        //     'fecha_nac' => '1999-11-19 23:54:26',
        //     'direccion'=>'c/Ernesto monasterio',
        //     'ci'=>'845656123',
        //     'genero'=>'femenino',
        //     'password'=> bcrypt('123123'),
        //     'permiso_id'=>'1',
        //     'foto' => 'karen.jpg',
        //     'created_at' => now(),
        //     'id_user' => '',
        // ]);
        // DB::table('clientes')->insert([
        //     'nombres'=> 'Joy',
        //     'apellidos'=> 'Lopez',
        //     'telefono'=>'60545258',
        //     'fecha_nac' => '1999-11-19 23:54:26',
        //     'direccion'=>'c/ junin',
        //     'ci'=>'75454154',
        //     'genero'=>'femenino',
        //     'password'=> bcrypt('123123'),
        //     'permiso_id'=>'2',
        //     'foto' => 'joy.jpg',
        //     'created_at' => now(),
        //     'id_user' => '',
        // ]);
        
        DB::table('clientes')->insert([
            'nombres'=> 'Alejandra',
            'apellidos'=> 'Murillo',
            'telefono'=>'44125125',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion'=>'c/las palmas',
            'ci'=>'74566556',
            'genero'=>'femenino',
            'created_at' => now(),
            'id_user' => '6',
        ]);
        DB::table('clientes')->insert([
            'nombres'=> 'Mario',
            'apellidos'=> 'Sanchez',
            'telefono'=>'65125656',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion'=>'c/Ernesto monasterio',
            'ci'=>'54561220',
            'genero'=>'masculino',
            'created_at' => now(),
            'id_user' => '7',
        ]);
        DB::table('clientes')->insert([
            'nombres'=> 'Liz',
            'apellidos'=> 'Llanos',
            'telefono'=>'77048460',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion'=>'c/Ernesto monasterio',
            'ci'=>'151564',
            'genero'=>'femenino',
            'created_at' => now(),
            'id_user' => '8',
        ]);

    }
}
