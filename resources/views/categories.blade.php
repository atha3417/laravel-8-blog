@extends('layouts.main')

@section('container')
<h1 class="mb-4">Categories</h1>

@foreach ($categories as $category)
<ul>
    <li>
        <h5><a href="/categories" class="text-decoration-none">{{ $category->name }}</a></h5>
    </li>
</ul>
<h4>
</h4>
@endforeach

@endsection
