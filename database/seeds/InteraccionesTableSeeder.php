<?php

use Illuminate\Database\Seeder;

class InteraccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipointeraccions')->insert([
            'tipo' => 'Me gusta',
            'created_at' => now(),
        ]);
        DB::table('tipointeraccions')->insert([
            'tipo' => 'Compartir',
            'created_at' => now(),
        ]);
        DB::table('tipointeraccions')->insert([
            'tipo' => 'Comentar',
            'created_at' => now(),
        ]);
        DB::table('tipointeraccions')->insert([
            'tipo' => 'Seguir',
            'created_at' => now(),
        ]);
    }
}
