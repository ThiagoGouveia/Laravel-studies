@extends('layouts.app')


@section('content')

   <ul>

        @foreach ($posts as $post)
            <li>
                <div class="image-container"></div>
                <img height = 100 src="{{ $post->path }}" alt="">
                <a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->title }}
                    <button class="btn btn-dark">Visualizar</button>
                    
                </a>
            </li>
        @endforeach

   </ul>

@endsection