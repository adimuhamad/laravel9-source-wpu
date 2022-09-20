@extends('layouts.main')

@section('container')
    <h1 class="mb-4">Halaman Blog Posts</h1>
    @foreach ($posts as $post)
        <article class="mb-3 border-bottom">
            <h3><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
            <p>Oleh: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> di <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }} <a href="/posts/{{ $post->slug }}" class="text-decoration-none"> Lanjut baca ...</a></p>
        </article>
    @endforeach

@endsection