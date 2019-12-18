@extends('layouts.app')

@section('content')


<div class="container">
    @if(isset($details))
            @foreach($details as $user)
              <div class="userContainer row">
                <div class="avatarContainer col-2">
                  <img class="user_img" src="/storage/avatar_img/{{$user->avatar}}"alt="user img">
                </div>
                <div class="namecontainer col-10">
                  <a class="username" href="/user/{{$user->id}}">{{$user->name}}</a>
                </div>
              </div>
            @endforeach
    @endif
    @if (!isset($details))
      <p>There are no results that match or resemble that username</p>
    @endif
</div>

@endsection
