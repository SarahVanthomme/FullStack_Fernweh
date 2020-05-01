<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $users = User::pluck('id')->toArray();
    return [
        //
        'user_id' => $faker->randomElement($users),
        'category_id'=>$faker->numberBetween($min = 1, $max = 4),
        //'photo_id'=>$faker->numberBetween($min = 1, $max = 3),
        'title'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        'body'=>$faker->paragraph
    ];
});
