<?php

use Faker\Generator as Faker;
use \App\Course;
use \App\Blok;

$factory->define(Course::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "bloks_id" => $faker->numberBetween($min = 1, $max = 4),
    ];
});
