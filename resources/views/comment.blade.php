@extends('layouts.app')
@section('content')

<h1>COMMENT YOUR THOUGHTS</h1>
<form class="" action="/comment" method="post">
@csrf
<label for="">Write here</label>
<input type="text" name="comment" value="">
</form>

@endsection
