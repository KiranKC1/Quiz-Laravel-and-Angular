<?php

use Faker\Generator as Faker;
use App\Model\Category;

$factory->define(App\Model\Information::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->paragraph,
        'category_id' => function(){
            return Category::all()->random();
        }

    ];
});
