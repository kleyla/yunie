<?php

use Illuminate\Database\Seeder;

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
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Joy',
            'email' => 'joy@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '1',
            'foto' => 'joy.jpg',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Pedro',
            'email' => 'pedro@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '2',
            'foto' => 'man01.jpg',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Angela',
            'email' => 'angela@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '2',
            'foto' => 'wo.jpg',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'jose@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '2',
            'foto' => 'jose.jpg',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Alejandra',
            'email' => 'ale@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '3',
            'foto' => 'alejandra.png',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Mario',
            'email' => 'mario@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '3',
            'foto' => 'man03.jpg',
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'liz',
            'email' => 'liz@live.com',
            'password' => bcrypt('123123'),
            'id_permiso' => '3',
            'foto' => 'liz.png',
            'created_at' => now(),
        ]);
    }
}
