@extends('layouts.master')

@section('title')
<title>Read this post!</title>
@stop

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <a href="{{ action('PostsController@edit', $post->id) }}">
            <span class="glyphicon glyphicon-pencil"></span>Edit this post
        </a>
        <p>{{ $post->content }}</p>
        <p>Author's User ID: {{ $post->created_by }}</p>
        <p>Created at: {{ $post->created_at }} </p>
        <p>Updated at: {{ $post->updated_at }}</p>
    </div>
@stop