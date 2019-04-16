<?php

use Faker\Generator as Faker;
use \App\Test;

$factory->define(\App\Test::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "completed" => $faker->boolean,
        "grade" => $faker->randomFloat($nbMaxDecimals = 1, $min = 1, $max = 9),
        "EC" => $faker->randomFloat($nbMaxDecimals = 1, $min = 1, $max = 10),
        "courses_id" => $faker->numberBetween($min = 1, $max = 20),
    ];
});
