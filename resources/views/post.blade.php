@extends('layouts.main')

@section('container')
    <article class="mb-3 border-bottom">
        <h2>{{ $post->title }}</h2>
        <h5 class="mb-4">Oleh: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> di <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
        {!! $post->body !!}
    </article>

    <a href="/blog" class="text-decoration-none">kembali ke Posts</a>
@endsection