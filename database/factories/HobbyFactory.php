<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hobby;
use App\User;
use Faker\Generator as Faker;

$factory->define(Hobby::class, function (Faker $faker) {
    return [
        'hobby_name' => $faker->realText(rand(40, 50)),
        'age_first_started' => $faker->realText(rand(200, 800)),
        'user_id' => User::inRandomOrder()->first()->id,
    ];
});
