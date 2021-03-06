@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostController@store', 'method' => 'POST']) !!}
      
    <div class="form-group">
      {{ Form::label('title', 'Title') }}
      {{ Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
  
    <div class="form-group">
      {{ Form::label('body', 'Body') }}
      {{ Form::textarea('body','', ['class' => 'form-control', 'placeholder' => 'Body']) }}
    </div>
      {{ Form::submit('Submit', ['class' => 'btn btn-block btn-outline-secondary']) }}

      {!! Form::close() !!}
  </div>
@endsection