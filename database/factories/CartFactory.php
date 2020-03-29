<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cart;
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

$factory->define(Cart::class, function (Faker $faker) {
    return [
        'user_id' => rand(100, 1500) / 100,
        'item_id' => rand(100, 1500) / 100,
        'price' => rand(1000, 4000) / 100,
        'count' => rand(100, 10000) / 100,
    ];
});
