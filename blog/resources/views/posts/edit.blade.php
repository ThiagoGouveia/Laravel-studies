@extends('layouts.app')


@section('content')
    
    <h1>Edit post</h1>
    {!! Form::model($post, ['method'=>'PATCH', 'action' => ['App\Http\Controllers\PostsController@update', $post->id]]) !!}
        @csrf
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    {!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}


    {!! Form::close() !!}

    {!! Form::model($post, ['method'=>'DELETE', 'action' => ['App\Http\Controllers\PostsController@destroy', $post->id]]) !!}
        @csrf
    {!! Form::submit('Delete Post', ['class'=>'btn btn-info']) !!}
    {!! Form::close() !!}
    </form>


@endsection