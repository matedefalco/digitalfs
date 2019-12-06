<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    protected $table = 'posts_likes';
    protected $guarded = [];
}
