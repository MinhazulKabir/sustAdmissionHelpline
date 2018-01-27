<?php

$factory->define(App\Transportation::class, function (Faker\Generator $faker) {
    return [
        "cost" => $faker->name,
        "source" => $faker->name,
        "middle_point" => $faker->name,
        "destination" => $faker->name,
    ];
});
