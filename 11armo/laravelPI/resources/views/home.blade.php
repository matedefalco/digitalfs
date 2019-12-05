@extends('layouts.app')

@section('content')
  {{-- @dd($posts) --}}
  <section class='feed row align-items-center'>
    @foreach($posts as $post)
      <article class='post col-6'>

        <div class="userContainer row">
          <div class="avatarContainer col-3">
            <img class="user_img" src="storage/avatar_img/{{$post->user->avatar}}"alt="user img">
          </div>
          <div class="nameContainer col-9">
            <a href="">{{$post->user->name}}</a>
          </div>
        </div>

        <div class="mainImageContainer">
          <img src="storage/post_img/{{$post->img}}" class="main_img" alt="main image">
        </div>

        <div class="linkesContainer">
          <ul class="qualify">
            <li class="up">
              <a href="#"><i class="fa fa-angle-double-up fa-2x"></i></a>
            </li>
            <li class="down">
              <a href="#"><i class="fa fa-angle-double-down fa-2x"></i></a>
            </li>
            <li class="share">
              <a href="#"><i class="fa fa-share-square fa-2x"></i></a>
            </li>
            <li class="options">
              <a href="#"><i class="fa fa-ellipsis-h fa-2x"></i></a>
            </li>
          </ul>
        </div>

      </article>
    @endforeach
    </section>


@endsection
