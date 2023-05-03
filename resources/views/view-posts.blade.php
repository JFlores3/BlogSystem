@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('View Posts') }}</div>

                    <div class="card-body">
                        <ul>
                            @if (isset($posts))
                            @foreach ($blogPosts as $post)
                                <li>
                                    <a href="{{ route('blog_posts.show', ['id' => $post->id]) }}">
                                        {{ $post->title }}
                                    </a>
                                </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
