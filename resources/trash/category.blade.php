@extends('layouts.main')

@section('container')
    <h1 class="mb-4">Posts Category : {{ $category }}</h1>
    @foreach ($posts as $post)
    <article class="mb-3 border-bottom">
        <h3><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
        <p>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }} <a href="/posts/{{ $post->slug }}" class="text-decoration-none"> Read more ...</a></p>
    </article>
    @endforeach

@endsection