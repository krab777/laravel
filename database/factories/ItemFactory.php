<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Item;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
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




$factory->define(Item::class, function (Faker $faker) {

	// $faker->addProvider(new Faker\Provider\Base($faker));
	// $faker->addProvider(new Base($faker));

    return [
        'name' => $faker->title,
        'description' => $faker->paragraph,
        'price' => rand(100, 1500) / 100,
    ];
});
