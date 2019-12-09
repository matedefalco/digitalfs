@extends('layouts.app')
@section('content')

  <section class='feed row align-items-center'>
    <article class='post col-8' >
        <div class="userContainer row">
          <div class="avatarContainer col-3">
            <img class="user_img" src="/storage/avatar_img/{{$post->user->avatar}}"alt="user img">
          </div>
          <div class="namecontainer col-9">
            <a class="username" href="/user/{{$post->user->id}}">{{$post->user->name}}</a>
          </div>
        </div>
        <div class="mainImageContainer">
          <img src="/storage/post_img/{{$post->img}}" class="main_img" alt="main image">
        </div>
        @include('icons')

    </article>
    <div class="comments col-8">
      @foreach($comments as $comment)
        <div class="row">
          <div class="avatarContainer col-3">
            <img class="user_img" src="/storage/avatar_img/{{$comment->user->avatar}}"alt="user img">
          </div>
          <div class="col-3">
            {{$comment->user->name}}
          </div>
          <div class="col-6">
            {{$comment->comment}}
          </div>
        </div>
        <br>
      @endforeach
    </div>
  </section>


@endsection
