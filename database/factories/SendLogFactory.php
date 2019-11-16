<?php

use Faker\Generator as Faker;

$factory->define(App\SendLog::class, function (Faker $faker) {
    return [
        'usr_id' => App\User::all()->random()->usr_id,
        'num_id' => App\Number::all()->random()->num_id,
        'log_message' => $faker->text,
        'log_success' => $faker->boolean(90),
        'log_created' => $faker->dateTimeBetween(\Carbon\Carbon::now() . '- 1 month', \Carbon\Carbon::now()),
    ];
});
