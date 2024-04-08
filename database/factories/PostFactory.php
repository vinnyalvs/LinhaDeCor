<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'subtitle' => $faker->name,
        'body' => $faker->text,
        'thumbnail' => '1658586050.png',
    ];
});
