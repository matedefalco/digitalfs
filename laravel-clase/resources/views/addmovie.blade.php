@extends('master')

@section('title', 'Agrega película')
@section('h1', "Agregar nueva película")

@section('content')

<h1>Agregar película</h1>
<ul>
  @forelse ($errors->all() as $error)
    <li> {{$error}} </li>
  @empty

  @endforelse
</ul>

<form class="" action="/addmovie" method="post" enctype="multipart/form-data">
  {{-- @csrf --}}
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">título</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="titulo" value=" ">
    <small id="emailHelp" class="form-text text-muted">{{$errors->first('titulo')}}</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">rating</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="rating" value="">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">premios</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="awards" value="">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">fecha de estreno</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="release_date">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Duracion</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="length">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Genero</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="genre">

    @error('genre')
      <small id="emailHelp" class="form-text text-muted">{{ $message }}</small>
    @enderror

  </div>
  <div class="form-group">
      <label for="">imagen de película</label>
      <input type="file" name="image" value="">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

{{-- @dd($errors); --}}


@endsection
