@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-4">
    <main class="form-login w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Login Form</h1>

      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <form action="/login" method="post">  
        @csrf  
        <div class="form-floating">
          <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}" autofocus required>
          <label for="username">username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3 text-decoration-none">Not registered? <a href="/register">Register now!</a></small>
    </main>
  </div>
</div>  

@endsection