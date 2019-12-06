@extends('layouts.app')
@section('content')


<form class="" action="/crearPost" method="post" enctype="multipart/form-data">
  @csrf
  <p>  Ingresa el archivo:</p>
  <input name="img" type="file">
  <br>
  <label for="">Ingrese un comentario:</label>
  <input type="text" name="description" value="">
</form>

@endsection
