<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'price' => $faker->numberBetween(500,10000),
        'desc' => $faker->paragraph,
        'pic_url' => $faker->image('storage/app/public/images/items',640,480,null,false,false),
        'enabled' => true
    ];
});
