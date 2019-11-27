@extends('master')

@section('title')
  Actores
@endsection {{-- Versión larga. --}}

@section('content')
  <h1>Agregar actor</h1>
  {{-- <ul>
    @forelse ($errors->all() as $error)
      <li> {{$error}} </li>
    @empty

    @endforelse
  </ul> --}}

  <form class="" action="/actor/add" method="post" enctype="multipart/form-data">
    {{-- @csrf --}}
    {{csrf_field()}}
    <div class="form-group">
      <label for="first_name">Nombre</label>
      <input type="text" class="form-control" id="first_name" name="first_name" value=" ">
      {{-- <small id="emailHelp" class="form-text text-muted">{{$errors->first('titulo')}}</small> --}}
    </div>
    <div class="form-group">
      <label for="last_name">Apellido</label>
      <input type="text" class="form-control" id="last_name" name="last_name" value="">
      {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
    </div>
    <div class="form-group">
      <label for="raitng">Rating</label>
      <input type="text" class="form-control" id="rating" name="rating" value="">
      {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
    </div>

      {{-- @error('genre')
        <small id="emailHelp" class="form-text text-muted">{{ $message }}</small>
      @enderror --}}

    </div>
    {{-- <div class="form-group">
        <label for="">imagen de actor</label>
        <input type="file" name="image" value="">
    </div> --}}

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
