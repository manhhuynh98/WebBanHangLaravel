<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'unsigned name' => "",
        'image' => $faker->numberBetween(1,3).".png",
    ];
});
