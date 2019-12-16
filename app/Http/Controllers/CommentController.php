<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\User;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }

    public function search($id)
    {
      $comentarios = Comment::where('post_id', $id)->get();
      $comentariosConUser = array_map(function($e){
        return $e->avatar = $e->user->avatar;
      }, $comentarios);
      dd($comentariosConUser);
      return $comentarios;
    }

    public function searchall($post_ids, $offset)
    {
      $posts_idsdeserial = unserialize($post_ids);
      $data = [
        "comments" => array(
              "comment" => array(),
              "comment_id" => array(),
              "post_id" => array(),
              "user_id" => array()
        ),
        "users" => array(
              "avatar" => array(),
              "name" => array(),
              "user_id" => array()
        ),
      ];
      foreach ($posts_idsdeserial as $id) {
        $temp_comments = Comment::where('post_id', $id)->get();
        foreach ($temp_comments as $temp_comment) {
          $data["comments"]["comment_id"][] = $temp_comment->id;
          $data["comments"]["comment"][] = $temp_comment->comment;
          $data["comments"]["post_id"][] = $temp_comment->post_id;
          $data["comments"]["user_id"][] = $temp_comment->user_id;

          $temp_user = User::where('id', $temp_comment->user_id)->get()->first();
          $data["users"]["user_id"][] = $temp_user->id;
          $data["users"]["name"][] = $temp_user->name;
          $data["users"]["avatar"][] = $temp_user->avatar;
        }

      }
      return array_reverse($data);

    }
}
