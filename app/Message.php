<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  public $table = "messages";
  public $guarded = [];
  // public $primaryKey = "id";
}
