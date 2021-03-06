@extends('layouts.master')

@section('title')
<title>All the awesome posts</title>
@stop

@section('content')
<div class="container">
    <h1>Posts</h1>
    @foreach($posts as $post)
        <h2><a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></h2>
        <p>{{ $post->content }}</p>
        <p>Written by: {{ $post->user->name }}</p>
        <p>Created at: {{ $post->created_at }} </p>
        <p>Updated at: {{ $post->updated_at }} </p>
    @endforeach
    
    {!! $posts->appends(['q' => Input::get('q')])->render() !!}

</div>
@stop