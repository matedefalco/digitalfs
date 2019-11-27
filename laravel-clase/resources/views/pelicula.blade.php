@extends('master')
@section('title', 'Películas') {{-- Versión corta. --}}

@section('content')
      <h1>Detalle de la pelicula:</h1>
      <ul>
        <li> Nombre: {{ $pelicula->title }} </li>
        <li> Rating: {{ $pelicula->rating }} </li>
        <li> Premios: {{ $pelicula->awards }} </li>
        <li> Fecha de estreno: {{ $pelicula->release_date }} </li>
        <li> Genéro: {{$pelicula->generos->name}}</li>

      </ul>

      <a href="/peliculas"> Todas las peliculas </a>
@endsection
