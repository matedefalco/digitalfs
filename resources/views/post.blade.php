@extends('layouts.app')
@section('content')

  <?php
    $array = [];
    $array[] = $post->id;
    $outputarray = serialize($array);
    $offset = 0;
  ?>

  <script src="/js/comments.js" charset="utf-8"></script>

  <section class='feed  row '>
    <article class='post col-8' >

      {{-- User Container --}}
        <div class="userContainer row">

          <div class="avatarContainer col-3">
            <img class="user_img" src="/storage/avatar_img/{{$post->user->avatar}}"alt="user img">
          </div>

          <div class="namecontainer col-9">
            <a class="username" href="/user/{{$post->user->id}}">{{$post->user->name}}</a>
          </div>

        </div>

        {{-- Image Container --}}
        <div class="mainImageContainer">
          <img src="/storage/post_img/{{$post->img}}" class="main_img" alt="main image">
        </div>

        @include('icons')

        {{-- Description Container --}}
        <div class="descriptionContainer">
          <p>Description: {{$post->description}}</p>
        </div>
    </article>

    <div class="commentBox col-8 text-center">
      <form class="formComments"  action="/comment" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$post->id}}">
      <input type="text" name="comment" value="" placeholder="Write here">
      <button class="btn btn-primary" type="submit" name="button">Comment</button>
      </form>
    </div>

    <div class="comments col-8">
      @foreach($comments as $comment)
        <div class="comment row">

          {{-- Avatar --}}
          <div class="avatarContainer col-2">
            <img class="user_img" src="/storage/avatar_img/{{$comment->user->avatar}}"alt="user img">
          </div>

          {{-- Username --}}
          <div class="namecontainer col-5">
            <a class="username" href="/user/{{$comment->user->id}}">{{$comment->user->name}}</a>
          </div>

          {{-- Comentario --}}
          <div class="col-5">
            {{$comment->comment}}
          </div>

        </div>
        <br>
      @endforeach

      <a href="/api/comment/post/{{$outputarray}}/{{$offset}}" class="verMas">More comments</a>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  </section>


@endsection
