<?php

use Faker\Generator as Faker;
use \App\Assignment;

$factory->define(Assignment::class, function (Faker $faker) {
    return [
        "name" => $faker->name(),
        "url" => "https://picsum.photos/200/?random",
        "description" => $faker->name(),
    ];
});
