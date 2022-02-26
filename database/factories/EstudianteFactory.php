<?php

namespace Database\Factories;

use App\Estudiante;
use Faker\Generator;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
$factory->define(Estudiante::class, function(Generator $faker){
    $array = [
        'nombre' =>$faker->nombre,
        'apellido' =>$faker->apellido,
        'correo' =>$faker->correo,
        'numero' =>$faker->numero,
    ];
    return $array;
});