@extends('layouts.master')

@section('title')

	<title>Dog Create Form</title>

@stop

@section('content')

	<main class="container">
		<h1>Dog Create Form</h1>
		<form method="POST" action="{{ action('DogsController@store') }}">
			{!! csrf_field() !!}
			<input type="text" name="name" placeholder="Enter Dog Name" value="{{ old('name') }}">
			<input type="text" name="breed" placeholder="Enter Dog Breed" value="{{ old('breed') }}">
			<input type="text" name="age" placeholder="Enter Dog Age" value="{{ old('age') }}">
			<button>Submit</button>
		</form>

		<form method="POST" action="{{ action('DogsController@destroy', array(2)) }}">
			{!! csrf_field() !!}
			<button class="btn btn-danger">Delete Dog with Id of 2</button>
			{{ method_field('DELETE') }}
		</form>

	</main>


@stop