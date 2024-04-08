<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\TimelinePost::class, function (Faker $faker) {
    return [
        'timeline_type' => 'law',
        'event_date' => $faker->dateTimeBetween('-200 years','-100 years'),
    ];
});


