<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public $table = "comments";
  // public $timestamps = false;
  protected $guarded = [];
  // public $primaryKey = "id";
  public function user(){
    return $this->belongsTo('App\User','user_id');
  }

}
