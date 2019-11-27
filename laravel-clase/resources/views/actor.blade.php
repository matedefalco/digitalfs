@extends('master')

@section('title')
  Actores
@endsection {{-- Versión larga. --}}

@section('content')
  <h1>Detalles de actor:</h1>
  <ul>
    <li> Nombre: {{ $actor->first_name }} </li>
    <li> Apellido: {{ $actor->last_name }} </li>
    <li> Rating: {{ $actor->rating }} </li>
  </ul>

  <a class="btn btn-primary" href="/actor/{{$actor->id}}/edit">EDITAR </a>
  <a href="/actores"> Todas los actores </a>
@endsection
