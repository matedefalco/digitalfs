@extends('layouts.app')

@section('content')
  {{-- @dd($posts) --}}
<div class="container">

  <main>
    @foreach($posts as $post)
    <article>
      <div class="post">

        <div class="user">
          <img class="user_img" src="storage/avatar_img/{{$post->user->avatar}}"alt="user img">
          <div class="user_name">
            <a href="#"></a>
          </div>
        </div>

        <div class="main_img">
          <img src="storage/post_img/{{$post->img}}" class="" alt="main image">
        </div>

        <div class="likes">
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

      </div>
    </article>
  @endforeach

  </main>
  <br>
  <br>



@endsection
