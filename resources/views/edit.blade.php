@extends('layouts.app')
@section('content')

  <h1>Your previous description</h1>
    {{$post->description}}
  <h2>Now write your new description</h2>
  <form class="" action="/edit" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$post->id}}">
    <input type="text" name="newDesc" value="">
    <button type="submit" name="button">Submit</button>
  </form>
@endsection
