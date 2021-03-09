@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="/posts/create" class="btn btn-secondary">Create Post</a>
                        <h2>Your blog posts</h2>

                        @if(count($posts) > 0)
                            <table class="table table-stripe">
                                <tr>
                                    <th class="">Title</th>
                                    <th class=""></th>
                                    <th class=""></th>
                                </tr>
                                <tr>
                                    <th class="">{{ $post->title }}</th>
                                    <th class=""> 
                                        <a class="btn btn-secondary" href="/posts/{{ $post->id }}/edit">
                                        
                                        </a>
                                    </th>
                                    <th class=""></th>
                                </tr>
                            </table>
                        @else
                            <p>Zero posts found...</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
