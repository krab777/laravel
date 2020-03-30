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

	$faker->addProvider(new \Faker\Provider\Base($faker));
	$faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
	$faker->addProvider(new \Bezhanov\Faker\Provider\Placeholder($faker));
	$faker->addProvider(new \Bezhanov\Faker\Provider\Device($faker));
	
    return [
        'name' => $faker->deviceModelName(),
        'description' => $faker->text(200),
        'price' => rand(2500, 15000) / 10,
        'total_count' => rand(3, 15),
       	'image' => $faker->placeholder('700x400'),
    ];
});
