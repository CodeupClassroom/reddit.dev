@extends('layouts.master')

@section('title')
	<title>Edit Posts</title>
@stop

@section('content')
	<main class="container">
		<h1>Form to Edit Posts</h1>
		<form method="POST" action="{{ action('PostsController@update', $post->id) }}">
			{!! csrf_field() !!}
			<div class="form-group">
				<input class="form-control" type="text" name="title" value="{{ $post->title }}">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="url" value="{{ $post->url }}">
			</div>
			<div class="form-group">
				<textarea class="form-control" name="content">{{ $post->content }}</textarea>
			</div>
			{{ method_field('PUT') }}
			<button class="btn btn-success">Submit</button>
		</form>
		
		<!-- Form to delete this post -->
		<form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
			{!! csrf_field() !!}
			<button class="btn btn-danger">Delete Post</button>
			{{ method_field('DELETE') }}
		</form>

	</main>
@stop