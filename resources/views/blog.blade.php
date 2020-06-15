@extends('layouts/main')

@section('main-content')
   <h1>My blog</h1>
   <a href="{{ route('home') }}">Return to home</a>
   <section>
      {{-- @dd($post) --}}
      @foreach ($post as $item)
         <article>
            <h3>{{$item['title']}}</h3>
            <p>{{$item['description']}}</p>
            <a href="{{ route('blog.show',['slug' => $item['slug']]) }}">Leggi di più</a>
         </article>
      @endforeach
   </section>

@endsection