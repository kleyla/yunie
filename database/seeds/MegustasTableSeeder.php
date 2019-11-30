<?php

use Illuminate\Database\Seeder;

class MegustasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('megustas')->insert([
            'cant_monedas' => 3,
            'created_at' => now(),
        ]);
        DB::table('megusta_pubs')->insert([
            'id_cliente' => 1,
            'id_publicacion' => 1,
            'id_megusta' => 1,
            'created_at' => now(),
        ]);
        DB::table('megusta_pubs')->insert([
            'id_cliente' => 1,
            'id_publicacion' => 2,
            'id_megusta' => 1,
            'created_at' => now(),
        ]);

        DB::table('megusta_pubs')->insert([
            'id_cliente' => 2,
            'id_publicacion' => 2,
            'id_megusta' => 1,
            'created_at' => now(),
        ]);
        DB::table('megusta_pubs')->insert([
            'id_cliente' => 3,
            'id_publicacion' => 1,
            'id_megusta' => 1,
            'created_at' => now(),
        ]);
        DB::table('megusta_pubs')->insert([
            'id_cliente' => 3,
            'id_publicacion' => 2,
            'id_megusta' => 1,
            'created_at' => now(),
        ]);
    }
}
