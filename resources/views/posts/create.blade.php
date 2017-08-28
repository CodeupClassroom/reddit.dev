@extends('layouts.master')

@section('title')
	<title>Create Posts</title>
@stop

@section('content')
	<main class="container">
		<h1>Form to Create Posts</h1>
		<form method="POST" action="{{ action('PostsController@store') }}">
			{!! csrf_field() !!}
			<div class="form-group">
				<input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="Title your post">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="url" value="{{ old('url') }}" placeholder="URL for post">
			</div>
			<div class="form-group">
				<textarea class="form-control" placeholder="Body of your post" name="content">{{ old('content') }}</textarea>
			</div>
			<button class="btn btn-success">Submit</button>
		</form>
	</main>
@stop