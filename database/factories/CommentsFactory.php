<?php

use Faker\Generator as Faker;
use App\Comment;

$factory->define(App\Comment::class, function (Faker $faker) {
    static $number = 0;
    return [
        Comment::PROP_PARENT_ID => $faker->numberBetween($min = 0, $max = $number++),
        Comment::CONTENT   => $faker->text(500)
    ];
});
