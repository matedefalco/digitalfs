@extends('layouts.app')
@section('content')

  <h1>Your previous description</h1>
    {{$posts->description}}
  <h2>Now write your new description</h2>
  <form class="" action="/edit" method="post">
    @csrf
    <input type="text" name="newDesc" value="">
  </form>
