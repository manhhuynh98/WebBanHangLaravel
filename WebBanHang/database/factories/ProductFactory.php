<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'unsigned name' => $faker->name(),
        'title' => $faker->title(),
        'description' => Str::random(5)."aaa".Str::random(5)."description".Str::random(5),
        'image' => "product".$faker->numberBetween(1,10),
        'status' => $faker->numberBetween(0,1),
        'idcategory' => 1,
        'sale' => $faker->numberBetween(0,1),
        'cost' => mt_rand(0,800000),
    ];
});
