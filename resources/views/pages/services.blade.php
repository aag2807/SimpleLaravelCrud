@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <p>This is the services page.</p>
    <ol>
        @foreach ($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ol>

@endsection
