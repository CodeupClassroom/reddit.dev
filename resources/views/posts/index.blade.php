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
        <p>Created at: {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }} </p>
    @endforeach

    {!! $posts->render() !!}

</div>
@stop