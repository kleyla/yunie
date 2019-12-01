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
        // DB::table('monedas')->insert([
        //     'valor' => 3,
        //     'id_megusta' => 1,
        //     'created_at' => now(),
        // ]);
        // DB::table('monedas')->insert([
        //     'valor' => 3,
        //     'id_megusta' => 2,
        //     'created_at' => now(),
        // ]);
        // DB::table('monedas')->insert([
        //     'valor' => 3,
        //     'id_megusta' => 3,
        //     'created_at' => now(),
        // ]);
        // DB::table('monedas')->insert([
        //     'valor' => 3,
        //     'id_megusta' => 4,
        //     'created_at' => now(),
        // ]);
        // DB::table('monedas')->insert([
        //     'valor' => 3,
        //     'id_megusta' => 5,
        //     'created_at' => now(),
        // ]);
        //
        // DB::table('monedas')->insert([
        //     'valor' => 4,
        //     'id_comentario' => 1,
        //     'created_at' => now(),
        // ]);
        // DB::table('monedas')->insert([
        //     'valor' => 4,
        //     'id_comentario' => 2,
        //     'created_at' => now(),
        // ]);
        // DB::table('monedas')->insert([
        //     'valor' => 4,
        //     'id_comentario' => 3,
        //     'created_at' => now(),
        // ]);
        // DB::table('monedas')->insert([
        //     'valor' => 4,
        //     'id_comentario' => 4,
        //     'created_at' => now(),
        // ]);
        // DB::table('monedas')->insert([
        //     'valor' => 4,
        //     'id_comentario' => 5,
        //     'created_at' => now(),
        // ]);

        // DB::table('monedas')->insert([
        //     'valor' => 3,
        //     'id_compartir' => 1,
        //     'created_at' => now(),
        // ]);
        // DB::table('monedas')->insert([
        //     'valor' => 3,
        //     'id_compartir' => 2,
        //     'created_at' => now(),
        // ]);
        // DB::table('monedas')->insert([
        //     'valor' => 3,
        //     'id_compartir' => 3,
        //     'created_at' => now(),
        // ]);
        // DB::table('monedas')->insert([
        //     'valor' => 3,
        //     'id_compartir' => 4,
        //     'created_at' => now(),
        // ]);
        // DB::table('monedas')->insert([
        //     'valor' => 3,
        //     'id_compartir' => 5,
        //     'created_at' => now(),
        // ]);
    }
}
