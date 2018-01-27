<?php

$factory->define(App\RestaurantInfomation::class, function (Faker\Generator $faker) {
    return [
        "restaurant_name" => $faker->name,
        "restaurant_description" => $faker->name,
    ];
});
