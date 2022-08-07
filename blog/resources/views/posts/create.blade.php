@extends('layouts.app')



@section('content')

    <h1>Create post</h1>
    {{-- <form method="post" action="/posts"> --}}
    
    {!! Form::open(['method'=>'POST', 'action' => 'App\Http\Controllers\PostsController@store']) !!}
        @csrf

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        </div>
        {{-- <input type="text" name="title" placeholder="Enter title"> --}}
        {{-- <input type="submit" name = "submit"> --}}


    {!! Form::close() !!}

@endsection