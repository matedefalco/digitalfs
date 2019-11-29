<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\PostLike;

$factory->define(PostLike::class, function (Faker $faker) {
    return [
        'post_id'=> rand(1,30),
        'user_id'=> rand(1,10),
    ];
});
