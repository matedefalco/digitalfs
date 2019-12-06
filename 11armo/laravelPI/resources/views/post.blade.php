@extends('layouts.app')

@section('content')

  <section class='feed row align-items-center'>

      <article class='post col-xs-12 col-md-6 col-lg-6'>

        <div class="userContainer row">
          <div class="avatarContainer col-3">
            <img class="user_img" src="/storage/avatar_img/{{$post->user->avatar}}"alt="user img">
          </div>
          <div class="namecontainer col-9">
            <a href="/user/{{$post->user->id}}">{{$post->user->name}}</a>
          </div>
        </div>

        <div class="mainImageContainer">
          <img src="/storage/post_img/{{$post->img}}" class="main_img" alt="main image">
        </div>

        @include('icons')

      </article>
    </section>


@endsection
