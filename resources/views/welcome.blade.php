@extends('layouts.app')
@section('content')
      <div class="content">
          <div class="title m-b-md">
            <h1 class="welcome text-justify">WELCOME TO LENTI</h1>
            <h2>A website for photographers to show their art</h2>
            <h3>Get into your account now and enjoy!!</h3>
          </div>

          <div class="links">
              <a href="{{ route('register') }}">Register</a>
              <a href="{{ route('login') }}">Log in</a>
          </div>
      </div>
@endsection
