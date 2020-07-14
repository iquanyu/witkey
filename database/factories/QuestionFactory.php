<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
	return [
        'user_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'content' => $faker->text,
        'excerpt' => $faker->text($maxNbChars = 200),
		'slug' => $faker->word,
    ];
});
