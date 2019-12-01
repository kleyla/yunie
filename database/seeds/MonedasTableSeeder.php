<?php

use Illuminate\Database\Seeder;

class MonedasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i < 115 ; $i++){
            DB::table('monedas')->insert([
            'valor' => 3,
            'id_megusta' => $i,
            'created_at' => now(),
        ]);
        }
        for ($i = 1 ; $i < 40 ; $i++){
            DB::table('monedas')->insert([
            'valor' => 3,
            'id_comentario' => $i,
            'created_at' => now(),
        ]);
        }
        for ($i = 1 ; $i < 23 ; $i++){
        DB::table('monedas')->insert([
            'valor' => 3,
            'id_compartir' => $i,
            'created_at' => now(),
        ]);
        }
    }
}
