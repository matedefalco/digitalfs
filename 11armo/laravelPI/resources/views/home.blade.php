@extends('layouts.app')

@section('content')
  {{-- @dd($posts) --}}
<div class="container">
  <header>
    <nav class="cabecera">
      <input class="lupa" placeholder="Buscar" type="search" name="lupa" value="">
    {{-- @if(isset($_SESSION["email"])): --}}
      <a class="logout" href="">
        <button type="button">LOGOUT</button>
      </a>
    {{-- @else: --}}
      <a class="login" href="">
        <button type="button">LOGIN</button>
      </a>
      <a class="login" href="">
        <button type="button">REGISTRO</button>
      </a>
    {{-- @endif --}}
    </nav>
  </header>
  <main>
    @foreach($posts as $post)
    <article>
      <div class="post">

        <div class="user">
          <img class="user_img" src="images/"alt="user img">
          <div class="user_name">
            <a href="#"></a>
          </div>
        </div>

        <div class="main_img">
          <img src="storage/post_img/" class="" alt="main image">
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
  <footer class="bottom_nav">
    <div class="nav_final">
        <a href="#"><i class="barra fa fa-home fa-3x"></i></a>
        <a href="#"><i class="barra fa fa-image fa-3x"></i></a>
        <a href="#"><i class="barra fa fa-plus-circle fa-3x"></i></a>
        <a href="#"><i class="barra fa fa-comment fa-3x"></i></a>
        <a href="#"><i class="barra fa fa-user fa-3x"></i></a>
    </div>
  </footer>


@endsection
