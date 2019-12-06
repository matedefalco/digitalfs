<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use App\PostLike;
use App\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->times(10)->create();
        factory(Post::class)->times(30)->create();
        factory(PostLike::class)->times(20)->create();
        factory(Comment::class)->times(1000)->create();
    }
}
