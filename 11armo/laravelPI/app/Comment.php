<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public $table = "comments";
  // public $timestamps = false;
  protected $guarded = [];
  // public $primaryKey = "id";
}
