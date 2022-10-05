@extends('dashboard.layouts.main')

@section('container')

<div class="container">
  <div class="row my-3">
    <div class="col-lg">        
      <h2>{{ $post->title }}</h2>

      <a href="/dashboard/posts" class="btn btn-success mb-3"><span data-feather="arrow-left"></span> Back to All Posts</a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3"><span data-feather="edit-2"></span> Edit Post</a>
      <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger mb-3" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span> Delete Post</button>
      </form>

      <img src="https://source.unsplash.com/1100x300/?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">

      <article class="my-3 fs-5 border-bottom">
        {!! $post->body !!}
      </article>

    </div>
  </div>
</div>

@endsection