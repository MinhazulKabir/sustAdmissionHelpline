<?php

$factory->define(App\EmergencyInformation::class, function (Faker\Generator $faker) {
    return [
        "emergency_info_admission" => $faker->name,
    ];
});
