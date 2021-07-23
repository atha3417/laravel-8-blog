@extends('layouts.main')

@section('container')
    <h1 class="mb-4">Halaman Blog Posts</h1>

    @foreach ($posts as $post)
        <article>
            <h4>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h4>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection
