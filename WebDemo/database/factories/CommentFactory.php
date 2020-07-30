<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content'           =>$faker->text(),
        'iduser'            =>function ()
        {
            return factory(App\User::class)->create()->id;
        },
        'idproduct'            =>function ()
        {
            return factory(App\Product::class)->create()->id;
        },
    ];
});
