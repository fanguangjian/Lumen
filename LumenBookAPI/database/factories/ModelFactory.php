<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

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

$factory->define(\App\Book::class, function (Faker $faker) {
    return [
//        'title' => $this->faker->sentence(3, true),
        'title' => $faker->sentence(3, true),
        'description' => $this->faker->sentence(6, true),
        'price' => $this->faker->numberBetween(25, 150),
        'author_id' => $this->faker->numberBetween(1, 50),
    ];
});
