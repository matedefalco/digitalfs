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
    <form class="container formMensaje" action="messages" enctype="multipart/form-data" method="post">
      @csrf
      <i class="la la-camera fa-3x col-2"><input id="avatar" type="file" class="messageImg form-control {{--@error('avatar') is-invalid @enderror--}}" name="content" value=""></i>
      <input class="inputMensaje" type="text" name="message" value="">
    </form>
  </footer>
@endsection
