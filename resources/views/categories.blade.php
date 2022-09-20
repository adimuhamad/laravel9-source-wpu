@extends('layouts.main')

@section('container')
    <h1 class="mb-4">Posts Categories</h1>
    @foreach ($categories as $category)
    <ul>
        <li>
            <h4><a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h4>
        </li>
    </ul>            
    @endforeach

@endsection