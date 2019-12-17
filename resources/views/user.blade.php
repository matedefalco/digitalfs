@extends('layouts.app')
@section('content')
{{-- @dd($user); --}}
<div class="container userMaster">
  <img class ="userAvatar float-left" src="/storage/avatar_img/{{$user->avatar}}" alt="">
  <h1 class="userNombre float-right">{{$user->name}}</h1>
</div>


<?php $count = 0; ?>

  <section class='feed row align-items-center'>

    @forelse ($posts as $post)

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
