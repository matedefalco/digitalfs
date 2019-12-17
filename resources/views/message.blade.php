@extends('layouts.app')
@section('content')

@forelse ($messages as $message)
  @if ($msj->userSender == Auth::user()->id)
    <div class="container darker">
      <img src=="/storage/avatar_img/{{$post->user->avatar}}" alt="Avatar" class="right">
      <p>{{$message->content}}</p>
      <span class="time-left">{{$message->created_at}}</span>
    </div>
  @else
    <div class="container">
      <img src="/storage/avatar_img/{{$post->user->avatar}}" alt="Avatar">
      <p>{{$message->content}}</p>
      <span class="time-right">{{$message->created_at}}</span>
    </div>
  @endif


@empty
<h2>No se encontraron mensajes</h2>
@endforelse


  <footer>
    <form class="container formMensaje" action="messages" enctype="multipart/form-data" method="post">
      @csrf
      <i class="la la-camera fa-3x col-2"><input id="avatar" type="file" class="messageImg form-control {{--@error('avatar') is-invalid @enderror--}}" name="content" value=""></i>
      <input class="inputMensaje" type="text" name="content" value="">
    </form>
  </footer>
@endsection
