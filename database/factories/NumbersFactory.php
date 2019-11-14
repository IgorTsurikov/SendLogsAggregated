<?php

use Faker\Generator as Faker;

$factory->define(App\Number::class, function (Faker $faker) {
    return [
        'cnt_id' => App\Country::all()->random()->cnt_id,
        'num_number' => $faker->phoneNumber,
    ];
});
