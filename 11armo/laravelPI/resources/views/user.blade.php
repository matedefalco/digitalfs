@extends('layouts.app')
@section('content')


<?php $count = 0; ?>

  <section class='feed row align-items-center'>

    @foreach($posts as $post)

      <?php if($count == 0){ ?>
        <div class='usercontainer col-12'>
          <div class="row">
            <div class="avatarContainer col-3">
              <img class="user_img" src="/storage/avatar_img/{{$post->user->avatar}}"alt="user img">
            </div>
            <div class="namecontainer col-9">
              <a href="/user/{{$post->user->id}}">{{$post->user->name}}</a>
            </div>
          </div>
        </div>
      <?php } ?>
      <article class='post col-xs-12 col-md-6 col-lg-6'>

        <div class="mainImageContainer">
          <a href="/post/{{$post->id}}">
            <img src="/storage/post_img/{{$post->img}}" class="main_img" alt="main image">
          </a>
        </div>

      @include('icons')

      </article>
      <?php $count++; ?>
    @endforeach
    </section>


@endsection
