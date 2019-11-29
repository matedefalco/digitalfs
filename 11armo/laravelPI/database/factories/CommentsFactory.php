<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
      'post_id'=> rand(1,30),
      'user_id'=> rand(1,10),
      'comment'=> $faker->text(200),
    ];
});
