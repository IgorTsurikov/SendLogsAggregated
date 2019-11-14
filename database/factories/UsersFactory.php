<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'usr_name' => $faker->name,
        'usr_active' => $faker->boolean,
    ];
});
