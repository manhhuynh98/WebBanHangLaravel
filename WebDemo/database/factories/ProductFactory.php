<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'  => $faker->name(),
        'image' => $faker->image(),
        'description' => $faker->sentence(),
        'title'   => $faker->title(),
        'status'  => $faker->numberBetween(0,1),
        'sale' => 0,
    ];
});
