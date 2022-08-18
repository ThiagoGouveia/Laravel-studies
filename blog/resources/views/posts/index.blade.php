@extends('layouts.app')


@section('content')

   <ul>

        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->title }}
                    <button class="btn btn-dark">Visualizar</button>
                    
                </a>
            </li>
        @endforeach

   </ul>

@endsection