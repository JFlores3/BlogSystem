@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Recent Blog Posts') }}</div>

                    <div class="card-body">
                        @if(isset ($posts))
                        @foreach($posts as $post)
                            <h2><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a></h2>
                            <p>{{ $post->created_at->format('M d, Y') }}</p>
                            <p>{{ $post->excerpt }}</p>
                            <hr>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection