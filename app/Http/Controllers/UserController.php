<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class UserController extends Controller
{
  public function index($id)
  {
    $posts = Post::where("user_id", "=", $id )->get();
    $user = User::where('id', '=',$id)->get();
    return view('user', compact('posts','user'));
  }
}
