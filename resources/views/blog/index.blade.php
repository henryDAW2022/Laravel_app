@extends('layout')

@section('content')
    <h1>Hola desde Blog</h1>
    <ul>
        @foreach($posts as $post)
        <li>
            <a href="{{ route('blog.show', $post->slug) }}">
                {{ $post ->title }}
            </a>
        </li>
        @endforeach
    </ul>
@endsection