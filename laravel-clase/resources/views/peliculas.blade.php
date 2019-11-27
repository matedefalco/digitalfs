@extends('master')
@section('title', 'Películas') {{-- Versión corta. --}}

@section('content')
      <h1>Listado de películas</h1>
      <ul>
        {{-- @dd($peliculas) --}}
      @foreach ($peliculas as $pelicula)

        {{-- @if ($pelicula !== "Rocky")
          <li> {{ $pelicula }} </li>
        @endif --}}

        @unless ($pelicula->title == "Rocky")
          <li> <a href="/pelicula/{{ $pelicula->id }}"> {{ $pelicula->title }}</a>  </li>
        @endunless

      @endforeach
      </ul>

      <a href="/actores"> Ver actores </a>
@endsection
