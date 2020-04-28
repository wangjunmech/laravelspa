<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\article;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(article::class, function (Faker $faker) {
    return [
        // 'user_id' => factory(User::class),
        'user_id' => 1,
        'articletitle' => $faker->title,
        'article' => $faker->paragraph,
        'newwords' => 'test;words',
    ];
});