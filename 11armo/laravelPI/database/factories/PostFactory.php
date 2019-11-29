<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
  $dir = storage_path('app/public/post_img');
    return [
        'img'=> $faker->image($dir, 300, 300, 'cats', false),
        'description'=> $faker->text(200),
        'user_id'=> rand(1,10),
    ];
});
