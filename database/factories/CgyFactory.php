<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cgy;
use Faker\Generator as Faker;

$factory->define(Cgy::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'desc' => $faker->paragraph,
        'pic' => $faker->imageUrl(640,480,'business',true),
        'enabled' => true
    ];
});
