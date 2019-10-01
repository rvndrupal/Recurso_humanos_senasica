<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\DetalleLaborales;
use Faker\Generator as Faker;

$factory->define(DetalleLaborales::class, function (Faker $faker) {
    return [
        'puesto_actual' => $faker->text(10),
        'codigo_puesto'=> $faker->randomElement(['C001', 'C002','C003','C004','C005']),
        'grado_nivel'=> $faker->randomElement(['Primaria', 'Secundaria','Preparatoria','Licanciatura','Posgrado']),
        'usuarios_id' => rand(1,5),
        'direcciones_generales_id' => rand(1,5),
        'direcciones_areas_id' => rand(1,5),
        'fecha_ultimo' => $faker->date('Y-m-d', 'now'),
        'fecha_senasica' => $faker->date('Y-m-d', 'now'),
        'calle_lab' => $faker->text(10),
        'num_lab' => $faker->text(10),
        'mun_lab'=> $faker->randomElement(['Mun1', 'Mun2','Mun3','Mun4','Mun5','Mun6','Mun7','Mun8','Mun9','Mun10']),
        'col_lab'=> $faker->randomElement(['Col1', 'Col2','Col3','Col4','Col5','Col6','Col7','Col8','Col9','Col10']),
        'cod_lab' =>  $faker->randomElement(['Cp1', 'Cp2','Cp3','Cp4','Cp5','Cp6','Cp7','Cp8','Cp9','Cp10']),
        'fecha_gobierno' => $faker->date('Y-m-d', 'now'),
    ];
});
