@extends('layouts.main')

@section('container')

<div class="container">
  <div class="row justify-content-center mb-3">
    <div class="col-md-9">        
      <h2>{{ $post->title }}</h2>
      <h5 class="mb-4">By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> at {{ $post->created_at->diffForHumans() }}</h5>

      @if($post->image)
      <div style="max-height: 300px; overflow:hidden;">
        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
      </div>
      @else
        <img src="https://source.unsplash.com/1100x300/?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
      @endif

      <article class="my-3 fs-5 border-bottom">
        {!! $post->body !!}
      </article>

      <a href="/posts" class="text-decoration-none btn btn-primary">Back to posts</a>
    </div>
  </div>
</div>

@endsection