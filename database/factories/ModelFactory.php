<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'username' => str_random(10),
        'password' => bcrypt('secret'),
        'email' => str_random(10).'@gmail.com',
        'phone' => str_random(10),
        'name' => str_random(10)
    ];
});