<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  public $table = "messages";
  public $timestamps = false;
  public $guarded = [];
  // public $primaryKey = "id";
}
