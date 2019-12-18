@extends('layouts.app')

@section('content')

  <?php
  $authed = true;
  if(Auth::user() == null){
    $authed = false;
  }
    $user = Auth::user();
    $id = Auth::id();
  ?>

  <script src="/js/main.js" charset="utf-8"></script>

  <section class='feed row'>
    {{-- <div class="column col-m-2 col-lg-2"> --}}
    <div class="articles col-sm-12 col-m-8 col-lg-8 target">
      @foreach($posts as $post)
        <article class='post col-12'>

          {{-- User Container --}}
          <div class="userContainer row">
            <div class="avatarContainer col-2">
              <img class="user_img" src="/storage/avatar_img/{{$post->user->avatar}}"alt="user img">
            </div>
            <div class="namecontainer col-10">
              <a class="username" href="/user/{{$post->user->id}}">{{$post->user->name}}</a>
            </div>
          </div>

          {{-- Image Container --}}
          <div class="mainImageContainer">
            <a href="/post/{{$post->id}}">
              <img src="/storage/post_img/{{$post->img}}" class="main_img" alt="main image">
            </a>
          </div>

          {{-- Likes Container --}}
          <div class="likesContainer row">
            <a href="#" style="width:12.5%">
              <i class="likesitem la la-thumbs-up fa-2x" style="width:100%"></i>
            </a>

            <a href="#" style="width:12.5%">
              <i class="likesitem la la-thumbs-down fa-2x" style="width:100%"></i>
            </a>

            {{-- si estas logueado --}}
            @if($post->user->id == Auth::user()->id)
            <a href="/edit/{{$post->id}}" style="width:12.5%">
              <i class="las la-edit fa-2x" style="width:100%"></i>
            </a>

            <a href="/destroy/{{$post->id}}" style="width:12.5%">
              <i class="las la-trash-alt fa-2x" style="width:100%"></i>
            </a>

            @endif
          </div>

          {{-- Description Container --}}
          <div class="descriptionContainer">
            <p class="desc">{{$post->description}}</p>
          </div>

        </article>
      @endforeach
    </div>

    @if($authed == true)
    <div class="column col-m-4 col-lg-4">
      <div class="userColumn row">
        <div class="avatarColumn col-5">
          <img class="user_img_column" src="/storage/avatar_img/{{$user->avatar}}"alt="user img">
        </div>
        <div class="nameColumn col-7">
          <a class="usernameColumn" href="/user/{{$id}}">{{$user->name}}</a>
        </div>
      </div>
      <div class="extrasColumn row">

      </div>
    </div>
    @endif

  </section>

    <div class="pageButtonDiv justify-content-center row">
      <a href="/api/page/1" class="pagebutton justify-content-center col-sm-12 col-m-6 col-lg-4 d-flex btn btn-outline-success">Load More</a>
    </div>
@endsection
