@extends('layouts.app')
@section('content')

<?php
if(Auth::user() == null){
  header("Location:/");
  exit;
}

?>

{{-- Caja gris arriba de section blanco --}}
<div class="crearPostGris">
  {{-- Caja blanca arriba fondo gris --}}
  <div class="crearPostBlanco mt-5 md-5">
    {{-- Formulario --}}
    <form class="m-t-3" action="/crearPost" method="post" enctype="multipart/form-data">
    @csrf
    {{-- ELegir imagen --}}
    <div class="form-group">
      <label for="exampleFormControlFile1">Upload your image</label>
      <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    </div>
    {{-- Descripcion --}}
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Description</span>
      </div>
      <input type="text" name="description" class="form-control" placeholder="Write here" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    {{-- Subir post --}}
    <button type="submit" class="btn btn-primary" name="button">Post</button>
  </form>
  </div>
</div>


@endsection
