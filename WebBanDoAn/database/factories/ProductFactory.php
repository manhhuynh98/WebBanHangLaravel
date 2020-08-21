<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'image' => $faker->numberBetween(1,10).".png",
        'content' => Str::random(10)." ".Str::random(10),
        'price' => $faker->numberBetween(100000,500000),
        'idCategory' => 1,
    ];
});
