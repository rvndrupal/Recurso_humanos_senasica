<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Usuarios;
use Faker\Generator as Faker;

$factory->define(Usuarios::class, function (Faker $faker) {
    return [
        'nom' => $faker->text(10),
        'ap' => $faker->text(10),
        'am' => $faker->text(10),
        'rfc' => $faker->text(10),
        'curp' => $faker->text(10),
        'foto' 	=> $faker->image('public/Fotos/Usuarios',200, 200, 'people', false),
        'fecha_nacimiento' => $faker->date('Y-m-d', 'now'),
        'pais_id' 		=> rand(1,4),
        // 'ife' => $faker->fileExtension('public/Ife','pdf'),
    ];
});
