@extends('layouts.main')

@section('main-content')
    <section class="link-box">
        <h2>Main content</h2>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('blog') }}">Blog</a>
    </section>
@endsection
