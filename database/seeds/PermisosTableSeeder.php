<?php

use Illuminate\Database\Seeder;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PERMISOS
        DB::table('permisos')->insert([
            'nombre' => 'Administrador',
            'descripcion' => 'Este es el administrador del sistema',
            'created_at' => now(),
        ]);
        DB::table('permisos')->insert([
            'nombre' => 'Vendedor',
            'descripcion' => 'Este usuario tiene el permiso de crear su tienda y ofrecer productos',
            'created_at' => now(),
        ]);
        DB::table('permisos')->insert([
            'nombre' => 'Cliente',
            'descripcion' => 'Este usuario es el cliente y puede realizar compras',
            'created_at' => now(),
        ]);
    }
}
