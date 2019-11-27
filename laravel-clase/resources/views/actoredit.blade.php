@extends('master')

@section('title')
  Editar
@endsection {{-- Versión larga. --}}

@section('content')
  <h1>Editar actor</h1>
  <form class="edit" action="/actor/{{$actor->id}}/edit" method="post">
    @csrf
    <div class="form-group">
      <label for="first_name">Nombre</label>
      <input type="text" class="form-control" id="first_name" name="first_name" value="{{$actor->first_name}}">
      {{-- <small id="emailHelp" class="form-text text-muted">{{$errors->first('titulo')}}</small> --}}
    </div>
    <div class="form-group">
      <label for="last_name">Apellido</label>
      <input type="text" class="form-control" id="last_name" name="last_name" value="{{$actor->last_name}}">
      {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
    </div>
    <div class="form-group">
      <label for="raitng">Rating</label>
      <input type="text" class="form-control" id="rating" name="rating" value="{{$actor->rating}}">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
@endsection
