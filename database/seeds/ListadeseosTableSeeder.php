<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ListadeseosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('listadeseos')->insert([
        //     'id_cliente' => 1,
        //     'created_at' => now(),
        // ]);
        $faker = Faker::create();
        for ($i = 1 ; $i < 110 ; $i++){
            DB::table('listadeseos')->insert([
            'id_cliente' => $i,
            'created_at' => now(),
            ]);
            //numero aleatorio entre 1 y la cantidad de productos que tendre en la base
            $random = $faker->numberBetween($min = 1, $max = 27);
            $random2 = $faker->numberBetween($min = 1, $max = 27);
            if ($random > $random2){
                for ($j = $random2; $j < $random+1; $j++){
                    DB::table('listaproductos')->insert([
                        'id_producto' => $j,
                        'id_listadeseo' => $i,
                        'created_at' => now(),
                    ]);
                }
            }else{
                for ($j = $random; $j < $random2; $j++){
                    DB::table('listaproductos')->insert([
                        'id_producto' => $j,
                        'id_listadeseo' => $i,
                        'created_at' => now(),
                    ]);
                }
            }
        }
                // DB::table('listaproductos')->insert([
        //     'id_producto' => 9,
        //     'id_listadeseo' => 3,
        //     'created_at' => now(),
        // ]);

    }
}
