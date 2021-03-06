@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostController@update', $post->id], 'method' => 'POST']) !!}
    Call to a member function with() on string

    <div class="form-group">
      {{ Form::label('title', 'Title') }}
      {{ Form::text('title', $post->title , ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
  
    <div class="form-group">
      {{ Form::label('body', 'Body') }}
      {{ Form::textarea('body',$post->body, ['class' => 'form-control', 'placeholder' => 'Body']) }}
    </div>
      {{ Form::hidden('_method', 'PUT') }}
      {{ Form::submit('Submit', ['class' => 'btn btn-block btn-outline-secondary']) }}

    {!! Form::close() !!}
  </div>
@endsection