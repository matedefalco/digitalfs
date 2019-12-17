@extends('layouts.app')
@section('content')
      <div class="content">
          <div class="title m-b-md">
            <h1 class="welcome1 text-justify">WELCOME TO LENTI</h1>
            <h2 class="welcome2">A website for photographers to show their art</h2>
            <h3 class="welcome3">Get into your account now and enjoy!!</h3>
          </div>

          <div class="links">
            <button type="button" class="btn btn-info">
              <a href="{{ route('register') }}">Register</a>
            </button>

            <button type="button" class="btn btn-info">
              <a href="{{ route('login') }}">Log in</a>
            </button>
          </div>
      </div>
@endsection
