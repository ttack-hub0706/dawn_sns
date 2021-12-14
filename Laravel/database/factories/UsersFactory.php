<?php

use Faker\Generator as Faker;
App\User;

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker,
        'mail' => $faker,
        'password' => $faker,
    ];
});
