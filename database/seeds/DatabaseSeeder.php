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
        $this->call(LaratrustSeeder::class);
       // $this->call(CategorySeeder::class);
        //$this->call(TagSeeder::class);
        //$this->call(ProductSeeder::class);
        //$this->call(PaymentMethodSeeder::class);
        //$this->call(CustomerSeeder::class);
        //$this->call(OrderSeeder::class);
        //$this->call(ProductTagSeeder::class);



        // factory(App\User::class, 10)->create();
        // factory(App\Usuarios::class, 3)->create();
        //factory(App\Paises::class, 3)->create();
        // factory(App\Escuelas::class, 3)->create();
        // factory(App\Grados::class, 3)->create();
        // factory(App\Idiomas::class, 3)->create();
        //factory(App\Carreras::class, 3)->create();
        // factory(App\Titulos::class, 3)->create();
        // factory(App\DireccionesAreas::class, 3)->create();
        // factory(App\DireccionesGenerales::class, 3)->create();
        // factory(App\Codigos::class, 10)->create();
        // factory(App\Niveles::class, 5)->create();







        DB::table('permissions')->insert([
            'name' => 'import-sistema',
            'display_name' => 'Importar',
            'description' => 'Importar al Sistema',
        ]);

        DB::table('permissions')->insert([
            'name' => 'import-permission',
            'display_name' => 'Importar',
            'description' => 'Importar Permisos',
        ]);

        DB::table('permissions')->insert([
            'name' => 'catalogos-sistema',
            'display_name' => 'Catalagos',
            'description' => 'Sistema de Cátalagos',
        ]);




    }
}
