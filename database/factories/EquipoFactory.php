<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Equipo;
use App\Models\Jugador;
use Faker\Generator as Faker;

$factory->define(Equipo::class, function (Faker $faker) {
    return [
        'equipo' => $faker->unique()->ramdonElement(['Real madrid','Psg','Juventus','Real sociedad','Mayorca']),
        'Cuidad' => $faker->unique()->ramdonElement(['Madrid','Francia','Turin']),
        'jugador_id'=> Jugador::inRandomOrder()->value('id')  
    ];
});