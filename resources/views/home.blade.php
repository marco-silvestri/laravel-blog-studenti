@extends('layouts.main')

@section('main-content')
    <section class="link-box">
        <h2>Main content</h2>
        <a href="{{ route('home') }}">Home</a>
        <a href="">Blog</a>
        {{-- mettere la rotta  --}}
    </section>
@endsection
