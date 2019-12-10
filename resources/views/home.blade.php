@extends('layouts.app')

@section('content')

  <?php
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

  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <section class='feed row'>
    <div class="articles col-sm-12 col-m-8 col-lg-8">
      @foreach($posts as $post)
        @break($count >= 10)
        <article class='post col-12'>

          <div class="userContainer row">
            <div class="avatarContainer col-3">
              <img class="user_img" src="/storage/avatar_img/{{$post->user->avatar}}"alt="user img">
            </div>
            <div class="namecontainer col-9">
              <a class="username" href="/user/{{$post->user->id}}">{{$post->user->name}}</a>
            </div>
          </div>

          <div class="mainImageContainer">
            <a href="/post/{{$post->id}}">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                <img src="/storage/post_img/{{$post->img}}" class="main_img" alt="main image">
              </button>
            </a>
          </div>
          <?php $count++;?>

          @include('icons')

        </article>
      @endforeach
    </div>
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
    </section>
    <div id="targetElement"class="col-12">

    </div>

@endsection
