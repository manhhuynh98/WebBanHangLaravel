<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Slide;
use Faker\Generator as Faker;

$factory->define(Slide::class, function (Faker $faker) {
    return [
        'image' => $faker->image(),
        'name' => $faker->name(),
        'description' => $faker->sentence(),
    ];
});
