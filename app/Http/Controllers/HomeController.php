<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $posts = Post::all()->reverse()->take(10); //last 10 posts
      return view('home', compact('posts'));
    }

    public function changepage($pageoffset)
    {

      $posts = Post::all()->reverse()->slice($pageoffset*10)->take(10); //next 10 posts

      $data = [ //base structure of the array we are sending
        "posts" => array(
              "img" => array(),
              "id"  => array(),
              "user_id" => array()
        ),
        "users" => array(
              "avatar" => array(),
              "name" => array(),
              "user_id" => array()
        ),
        "offset" => $pageoffset
      ];

        //take posts and make them arrays for js

        foreach ($posts as $post) {
          $data["posts"]["img"][] = $post->img;
          $data["posts"]["user_id"][] = $post->user_id;
          $data["posts"]["id"][] = $post->id;

          $temp_user = User::where('id', $post->user_id)->get()->first();
          $data["users"]["id"][] = $temp_user->id;
          $data["users"]["name"][] = $temp_user->name;
          $data["users"]["avatar"][] = $temp_user->avatar;
        }

      return $data;
    }

    public function storage(){

    }
}
