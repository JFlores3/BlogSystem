<!-- resources/views/my-posts.blade.php -->

@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>My Posts</h1>
    <ul>
        @if (isset($posts))
      @foreach ($posts as $post)
        <li>{{ $post->title }}</li>
      @endforeach
      @endif
    </ul>
  </div>
@endsection
