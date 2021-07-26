@extends('layouts.main') @section('container')

<article>
    <h1>{{ $post->title }}</h1>

    <p class="mb-5">
        By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a
            href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
            {{ $post->category->name }}
        </a>
    </p>
    {!! $post->body !!}
    <a href="/posts" class="d-block mt-3 text-decoration-none">Back to posts</a>
</article>

@endsection
