<?php

$factory->define(App\Association::class, function (Faker\Generator $faker) {
    return [
        "association_name" => $faker->name,
        "association_short_description" => $faker->name,
    ];
});
