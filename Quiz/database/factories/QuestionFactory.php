<?php

use Faker\Generator as Faker;
use App\Model\Category;

$factory->define(App\Model\Question::class, function (Faker $faker) {
    return [
        'question' => $faker->text($maxNbChars = 200),
        'answer' => $faker->word,
        'options' => json_encode($faker->words($nb = 4, $asText = false)), 
        'category_id' => function(){
            return Category::all()->random();
        }
    ];
});
