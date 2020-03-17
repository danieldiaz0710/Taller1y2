<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Jugador;

use Faker\Generator as Faker;

$factory->define(Jugador::class, function (Faker $faker) {
    return [
        
        'Nombre' => $faker->unique()->ramdonElement(['James','cristiano','Ronaldo']),
        'Apellido' => $faker->ramdonElement(['Rodriguez', 'Ronaldo', 'Nazario']),
        'Posicion' => $faker->ramdonElement(['cenro campo', 'delantero', 'delantero centro']),
        'reporte' =>[
            "Ritmo Car"=> $faker->randomElement(['bueno','excelente','malo'])
            
        ],

    ];
});
