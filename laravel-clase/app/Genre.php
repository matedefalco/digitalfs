<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $guarded = [];

    public function peliculas(){
      return $this->hasMany('App\Movie', 'genre_id');
    }
}
