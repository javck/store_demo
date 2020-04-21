<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'price' => $faker->numberBetween(500,10000),
        'desc' => $faker->paragraph,
        'cgy_id' => $faker->numberBetween(1,6),
        'pic_url' => $faker->imageUrl(640,480,'business',true),
        'enabled' => true
    ];
});
