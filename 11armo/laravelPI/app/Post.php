<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // public $table = "posts";
  // public $timestamps = false;
  protected $guarded = [];
  // public $primaryKey = "id";

  public function user(){
    $this->belongsTo('App\User','user_id');
  }
}
