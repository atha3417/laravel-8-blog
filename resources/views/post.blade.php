@extends('layouts.main') @section('container')

<article>
    <h1>{{ $post->title }}</h1>

    <p class="mb-5">
        By. Atha Tsaqif in <a href="/categories/{{ $post->category->slug }}">
            {{ $post->category->name }}
        </a>
    </p>
    {!! $post->body !!}
    <a href="/posts">Back to posts</a>
</article>

@endsection
