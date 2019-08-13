<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Codigos;
use Faker\Generator as Faker;

$factory->define(Codigos::class, function (Faker $faker) {
    return [
        'nom_codigos'=> $faker->randomElement(['A001', 'B001','C001','D001'])
    ];
});
