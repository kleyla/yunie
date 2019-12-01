<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CarritosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // El 110 es el numero de clientes +1 y los que asigno en random son los numeros de productos
        for ($i= 1 ; $i <110 ; $i++){
            $random = $faker->numberBetween($min = 1, $max = 27);
            $random2 = $faker->numberBetween($min = 1, $max = 27);
            if ($random > $random2){
                $menor = $random2;
                $mayor= $random;
            }else{
                $menor = $random;
                $mayor= $random2;
            }
            $total=0;
            $cantidad = $faker->numberBetween($min = 1, $max = 3);
                for ($j = $menor; $j < $mayor; $j++){
                    $precio= DB::table('productos')->where('id', $j)->avg('precio');
                    $total = $total + ($precio * $cantidad);
                }
                DB::table('carritos')->insert([
                    'monto' => $total,
                    'id_cliente' => $i,
                    'created_at' => now(),
                ]);
                for ($j = $menor; $j < $mayor; $j++){
                    $precio= DB::table('productos')->where('id', $j)->avg('precio');
                    $subtotal = $precio * $cantidad;
                    DB::table('carritoproductos')->insert([
                        'id_producto' => $j,
                        'id_carrito' => $i,
                        'cantidad' => $cantidad,
                        'subtotal' => $subtotal,
                        'created_at' => now(),
                    ]);
                }
        }
    }
}
