@extends('layouts/main')

@section('main-content')

    {{-- @dump($post) --}}

   <h1>My blog</h1>
   <a href="{{ route('home') }}">Return to home</a>
   <section>
        <article>
            <h3>{{$post['title']}}</h3>
            <p>{{$post['description']}}</p>
        </article>
    </section>

    <a href="{{ route('blog') }}">Return to archive</a>

@endsection