<?php

use Faker\Generator as Faker;

$factory->define(App\Sale::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence(3, false),
        'charge' => $faker->numberBetween(250, 1000),
    ];
});
