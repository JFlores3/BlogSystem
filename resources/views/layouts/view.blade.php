@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>View Posts</h1>

        @if (count($posts) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Body</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td><a href="{{ route('blog.show', $post->id) }}" class="btn btn-primary">View</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No posts found</p>
        @endif
    </div>
@endsection
