<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(18),
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl($width = 640, $height = 480),
        'duration' => $faker->biasedNumberBetween($min = 60, $max = 120, $function = 'sqrt'),      
        'releaseDate' => $faker->date($format = 'Y-m-d', $max = 'now'),      
        'genre' => $faker->realText(10),      
    ];
});

