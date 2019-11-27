<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //public $table = "movies";
    //public $primaryKey = "id";
    //public $timestamps = true;

    public $guarded = [];  //Permite cargar todos los campos
    //public $fillable = []; //Bloquea todos los campos.


    public function generos(){
      return $this->belongsTo('App\Genre', 'genre_id');
    }
}
