@extends('layouts.app')

@section('content')

  <?php
  $authed = true;
  if(Auth::user() == null){
    $authed = false;
  }

    $user = Auth::user();
    $id = Auth::id();
    $count = 0;
  ?>

  <script id="blockOfStuff" type="text/html">
    <div class="modalmain container">
      <div class="modalimage col-8">
        <a href="/post/{{----}}">
          <img src="/storage/post_img/{{----}}" class="main_img" alt="main image">
        </a>
      </div>

      <div class="modaluser col-4">
        <div class="modalavatar col-3">
          <img class="modal_user_img" src="/storage/avatar_img/{{----}}"alt="user img">
        </div>
        <div class="modalnamecontainer col-9">
          <a class="modalusername" href="/user/{{----}}">{{----}}</a>
        </div>
      </div>
    </div>
  </script>


  <section class='feed row'>
    <div class="articles col-sm-12 col-m-8 col-lg-8">
      @foreach($posts as $post)
        <article class='post col-12'>

          <div class="userContainer row">
            <div class="avatarContainer col-2">
              <img class="user_img" src="/storage/avatar_img/{{$post->user->avatar}}"alt="user img">
            </div>
            <div class="namecontainer col-10">
              <a class="username" href="/user/{{$post->user->id}}">{{$post->user->name}}</a>
            </div>
          </div>

          <div class="mainImageContainer">
            <a href="/post/{{$post->id}}">
              <img src="/storage/post_img/{{$post->img}}" class="main_img" alt="main image">
            </a>
          </div>
          <?php $count++;?>

          @include('icons')

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
    <div id="targetElement"class="col-12">

    </div>

@endsection
