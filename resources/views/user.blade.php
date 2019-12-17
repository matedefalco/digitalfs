@extends('layouts.app')
@section('content')
{{-- @dd($user); --}}
<div class="container userMaster">
  <img class ="userAvatar" src="/storage/avatar_img/{{$user->avatar}}" alt="">
  <h1 class="userNombre">{{$user->name}}</h1>
</div>


<?php $count = 0; ?>

  <section class='feed row align-items-center'>

    @forelse ($posts as $post)

      <?php if($count == 0){ ?>
        <div class='align-middle usercontainer col-12'>
          <div class="row">
            <div class="avatarContainer col-3">
              <img class="user_img" src="/storage/avatar_img/{{$post->user->avatar}}"alt="user img">
            </div>
            <div class="namecontainer col-9">
              <a class="username" href="/user/{{$post->user->id}}">{{$post->user->name}}</a>
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
    </section>

    @empty
      <br>
      <h1>This user haven't posted anything yet</h1>
    @endforelse



@endsection
