<?php

$factory->define(App\HotelInformation::class, function (Faker\Generator $faker) {
    return [
        "hotel_name" => $faker->name,
        "hotel_description" => $faker->name,
    ];
});
