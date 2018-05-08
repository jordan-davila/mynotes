<?php

use Faker\Generator as Faker;

$factory->define(App\Note::class, function (Faker $faker) {
    return [
        'color' => $faker->hexcolor,
        'body'  => $faker->realText(300),
    ];
});
