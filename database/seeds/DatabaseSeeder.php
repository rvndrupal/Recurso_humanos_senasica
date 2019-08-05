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
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(ProductTagSeeder::class);



        // factory(App\Usuarios::class, 3)->create();
        factory(App\Paises::class, 3)->create();
        factory(App\Escuelas::class, 3)->create();
        factory(App\Grados::class, 3)->create();
        factory(App\Idiomas::class, 3)->create();
        factory(App\Carreras::class, 3)->create();
        factory(App\Titulos::class, 3)->create();
        factory(App\DireccionesAreas::class, 3)->create();
        factory(App\DireccionesGenerales::class, 3)->create();


        DB::table('estado_civils')->insert([
            'nombre' => 'Soltero(a)',
        ]);
        DB::table('estado_civils')->insert([
            'nombre' => 'Casado(a)',
        ]);


    }
}
