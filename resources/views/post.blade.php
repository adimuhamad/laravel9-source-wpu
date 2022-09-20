@extends('layouts.main')

@section('container')
    <article class="mb-3 border-bottom">
        <h2>{{ $post->title }}</h2>
        <h5 class="mb-4">Oleh: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> di <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
        {!! $post->body !!}
    </article>

    <a href="/blog" class="mb-3 text-decoration-none">kembali ke Posts</a>
@endsection