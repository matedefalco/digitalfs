@extends('layouts.app')
@section('content')
{{-- @dd($user); --}}
<div class="container userMaster">
  <div class="userAvatar float-left">
    <img class ="" src="/storage/avatar_img/{{$user->avatar}}" alt="">
  </div>
  <div class="userNombre float-right">
    <h1 class="">{{$user->name}}</h1>
  </div>
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
