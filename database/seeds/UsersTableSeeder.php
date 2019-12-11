<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ley',
            'email' => 'ley@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '1',
            'foto' => 'karen.jpg',
            'created_at' => '2019-11-10 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Joy',
            'email' => 'joy@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '1',
            'foto' => 'joy.jpg',
            'created_at' => '2019-11-10 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Pedro',
            'email' => 'pedro@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '2',
            'foto' => 'man01.jpg',
            'created_at' => '2019-11-10 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Angela',
            'email' => 'angela@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '2',
            'foto' => 'wo.jpg',
            'created_at' => '2019-11-10 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'jose@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '2',
            'foto' => 'jose.jpg',
            'created_at' => '2019-11-10 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Alejandra',
            'email' => 'ale@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '3',
            'foto' => 'alejandra.png',
            'created_at' => '2019-11-10 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Mario',
            'email' => 'mario@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '3',
            'foto' => 'man03.jpg',
            'created_at' => '2019-11-15 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'liz',
            'email' => 'liz@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '3',
            'foto' => 'liz.png',
            'created_at' => '2019-11-15 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'german',
            'email' => 'german@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '1',
            'foto' => 'hombre1.jpg',
            'created_at' => '2019-11-15 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'brandon',
            'email' => 'brandon@outlook.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '2',
            'foto' => 'hombre2.jpg',
            'created_at' => '2019-11-15 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'adolfo',
            'email' => 'adolfo@gmail.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '3',
            'foto' => 'hombre3.jpg',
            'created_at' => '2019-11-15 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'cecilia',
            'email' => 'cecilia@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '1',
            'foto' => 'mujer1.jpg',
            'created_at' => '2019-11-15 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'teresa',
            'email' => 'teresa@hotmail.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '2',
            'foto' => 'mujer2.jpg',
            'created_at' => '2019-11-15 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'martha',
            'email' => 'martha13@hotmail.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '3',
            'foto' => 'mujer3.jpg',
            'created_at' => '2019-11-25 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'emiliane',
            'email' => 'emili1798@hotmail.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '3',
            'foto' => 'mujer4.jpg',
            'created_at' => '2019-11-25 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'romeo',
            'email' => 'romeo@hotmail.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '3',
            'foto' => 'mujer4.jpg',
            'created_at' => '2019-11-25 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'leo',
            'email' => 'leo713@hotmail.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '3',
            'foto' => 'hombre2.jpg',
            'created_at' => '2019-11-25 00:00:00',
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'juan' ,
            'email' => 'juan1235@hotmail.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '3',
            'foto' => 'hombre1.jpg',
            'created_at' => '2019-11-25 00:00:00',
            'updated_at' => now(),
        ]);
        //los nuevos clientes
        $faker = Faker::create('es_PE');
    	foreach (range(1,100) as $index) {
	        DB::table('users')->insert([
	            'name' => $faker->firstNameMale,
	            'email' => $faker->email,
	            'password' => bcrypt('123123'),
                'id_permiso' => '3',
                'foto' => $faker->imageUrl(640,480, null, false),
                'created_at' => now(),
	        ]);
        }
        //vendedores a partir del id 119
        foreach (range(1,50) as $index) {
	        DB::table('users')->insert([
	            'name' => $faker->firstNameFemale,
	            'email' => $faker->email,
	            'password' => bcrypt('123123'),
                'id_permiso' => '2',
                'foto' => $faker->imageUrl(640,480, null, false),
                'created_at' => now(),
	        ]);
	    }
    }
}
