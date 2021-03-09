@extends('layouts.app')

@section('content')
  <div class="container">
    <a href="/posts" class="btn btn-outline-info btn-sm">Go Back</a>
    <br>
    <br>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
  
  </div>
@endsection
