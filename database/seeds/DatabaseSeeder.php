<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermisosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(VendedorsTableSeeder::class);
        $this->call(TiendasTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(ImagenTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(PublicacionsTableSeeder::class);
        $this->call(SeguirTableSeeder::class);
        $this->call(CarritosTableSeeder::class);
        $this->call(ListadeseosTableSeeder::class);
        $this->call(MegustasTableSeeder::class);
        $this->call(CompartirTableSeeder::class);
        $this->call(ComentarTableSeeder::class);
        $this->call(MonedasTableSeeder::class);
        
    }
}
