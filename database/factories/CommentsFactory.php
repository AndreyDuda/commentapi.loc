<?php

use Faker\Generator as Faker;



$factory->define(App\Comment::class, function (Faker $faker) {
    static $number = 0;
    return [
        'id_parent' => $faker->numberBetween($min = 0, $max = $number++),
        'comment'   => $faker->text($maxNbChars = 500)
    ];
});

