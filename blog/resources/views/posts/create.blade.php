@extends('layouts.app')



@section('content')

    <h1>Create post</h1>
    <form method="post" action="/posts">
        @csrf
        <input type="text" name="title" placeholder="Enter title">
        <input type="submit" name = "submit">


    </form>

@endsection