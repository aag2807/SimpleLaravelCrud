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
    <hr>
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-sm btn-primary">
      Edit
    </a>
    <br>
    {!! Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $post->id], 'method' => 'POST']) !!}
      {{ Form::hidden('_method', 'DELETE') }}
      {{ Form::submit('Delete', ['class' => "btn btn-danger btn-sm mt-2"]) }}
    {!! Form::close() !!}

  
  
  
  </div>
@endsection
