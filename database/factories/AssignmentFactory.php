<?php

use Faker\Generator as Faker;
use \App\Assignment;

$factory->define(Assignment::class, function (Faker $faker) {
    return [
        "project_name" => $faker->name(),
        "image_url" => "https://picsum.photos/200/?random",
        "description" => $faker->name(),
    ];
});
