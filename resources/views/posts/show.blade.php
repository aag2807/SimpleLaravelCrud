@extends('layouts.app')

@section('content')
  <div class="container">
    <h2 class="text-center">{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
  
  
  
  </div>
@endsection
view('posts.show')->with('post', $post);