@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Post</h1>        
</div>

<div class="col-lg-11 mb-5">
  <form action="/dashboard/posts" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      @error('title')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required autofocus>
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" readonly required>
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      @error('category')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      <select class="form-select @error('category') is-invalid @enderror" name="category_id" required>
        <option selected>Choose Category</option>
        @foreach ($categories as $category)
          @if(old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
          @else            
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
        <p class="text-danger">{{ $message }}</p>
      @enderror
      <input id="body" type="hidden" name="body">
      <trix-editor input="body"></trix-editor>
    </div>    
    <button type="submit" class="btn btn-primary">Create Post</button>
    <a href="/dashboard/posts" class="btn btn-warning">Cancel</a>
  </form>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function() {
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  });
</script>

@endsection