@extends('master')

@section('title')
  Actores
@endsection {{-- Versión larga. --}}

@section('content')
      <h1>Listado de actores</h1>
      <ul>
        @forelse ($actores as $actor)
          {{-- <li>{{ $actor->first_name }}, {{$actor->last_name}}</li> --}}
          <a href="/actor/{{$actor->id}}"><li>{{ $actor->nombreCompleto() }}</li></a>
        @empty
          <p>La lista no tiene actores en este momento.</p>
        @endforelse

      </ul>

      <a href="/peliculas"> Ver peliculas </a>
@endsection
