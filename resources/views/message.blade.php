@extends('layouts.app')
@section('content')

  <div class="container">
    <img src="/storage/avatar_img/{{$post->user->avatar}}" alt="Avatar">
    <p>{{$user->message}}</p>
    <span class="time-right">TIEMPO DEL MENSAJE</span>
  </div>

  <div class="container darker">
    <img src=="/storage/avatar_img/{{$post->user->avatar}}" alt="Avatar" class="right">
    <p>{{$user->message}}</p>
    <span class="time-left">TIEMPO DEL MENSAJE</span>
  </div>
  <footer>
    <form class="" action="messages" method="post">
      @csrf
      <input type="text" name="message" value="">
    </form>
  </footer>
@endsection
