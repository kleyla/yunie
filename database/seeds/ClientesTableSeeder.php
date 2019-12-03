<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombres' => 'Alejandra',
            'apellidos' => 'Murillo',
            'telefono' => '44125125',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion' => 'c/las palmas',
            'ci' => '74566556',
            'genero' => 'femenino',
            'updated_at' => now(),
            'created_at' => '2019-11-10 00:00:00',
            'id_user' => '6',
        ]);
        DB::table('clientes')->insert([
            'nombres' => 'Mario',
            'apellidos' => 'Sanchez',
            'telefono' => '65125656',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion' => 'c/Ernesto monasterio',
            'ci' => '54561220',
            'genero' => 'masculino',
            'updated_at' => now(),
            'created_at' => '2019-11-10 00:00:00',
            'id_user' => '7',
        ]);
        DB::table('clientes')->insert([
            'nombres' => 'Liz',
            'apellidos' => 'Llanos',
            'telefono' => '77048460',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion' => 'c/Ernesto monasterio',
            'ci' => '151564',
            'genero' => 'femenino',
            'updated_at' => now(),
            'created_at' => '2019-11-10 00:00:00',
            'id_user' => '8',
        ]);
        DB::table('clientes')->insert([
            'nombres' => 'Adolfo',
            'apellidos' => 'Mendoza Ribera',
            'telefono' => '74598756',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion' => 'c/facundo monasterio',
            'ci' => '21548934',
            'genero' => 'masculino',
            'updated_at' => now(),
            'created_at' => '2019-11-10 00:00:00',
            'id_user' => '11',
        ]);
        DB::table('clientes')->insert([
            'nombres' => 'Martha',
            'apellidos' => 'Ruiz Solar',
            'telefono' => '77048460',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion' => 'c/Lopez Mon',
            'ci' => '151564',
            'genero' => 'femenino',
            'updated_at' => now(),
            'created_at' => '2019-11-15 00:00:00',
            'id_user' => '14',
        ]);
        DB::table('clientes')->insert([
            'nombres' => 'Emiliane',
            'apellidos' => 'Suarez Liz',
            'telefono' => '77048460',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion' => 'c/Monasterio',
            'ci' => '151564',
            'genero' => 'femenino',
            'updated_at' => now(),
            'created_at' => '2019-11-15 00:00:00',
            'id_user' => '15',
        ]);
        DB::table('clientes')->insert([
            'nombres' => 'Romeo',
            'apellidos' => 'Cespedes Liz',
            'telefono' => '77048460',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion' => 'c/Monasterio',
            'ci' => '151564',
            'genero' => 'masculino',
            'updated_at' => now(),
            'created_at' => '2019-11-15 00:00:00',
            'id_user' => '16',
        ]);
        DB::table('clientes')->insert([
            'nombres' => 'Leo',
            'apellidos' => 'Cespedes Liz',
            'telefono' => '77048460',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion' => 'c/Monasterio',
            'ci' => '151564',
            'genero' => 'masculino',
            'updated_at' => now(),
            'created_at' => '2019-11-15 00:00:00',
            'id_user' => '16',
        ]);
        DB::table('clientes')->insert([
            'nombres' => 'Juan',
            'apellidos' => 'Ruiz Liz',
            'telefono' => '77048460',
            'fecha_nac' => '1999-11-19 23:54:26',
            'direccion' => 'c/Monasterio',
            'ci' => '151564',
            'genero' => 'masculino',
            'updated_at' => now(),
            'created_at' => '2019-11-25 00:00:00',
            'id_user' => '16',
        ]);
        $i = 18;
        $faker = Faker::create('es_PE');
        foreach (range(1, 100) as $index) {
            $i = $i + 1;
            $fecha = $faker->date($format = 'Y-m-d', $max = 'now');
            DB::table('clientes')->insert([
                'nombres' => $faker->firstNameMale,
                'apellidos' => $faker->lastName,
                'telefono' => $faker->PhoneNumber,
                'fecha_nac' => $fecha,
                'direccion' => $faker->streetAddress,
                'ci' => $faker->dni,
                'genero' => 'masculino',
                'created_at' => now(),
                'updated_at' => now(),
                'id_user' => $i,
            ]);
        }
    }
}
