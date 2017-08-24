@extends('layouts.master')

@section('title')
	<title>Increment View</title>
@stop

@section('content')

	<h1>The number is currently {{$number}}</h1>
	<a href="{{action('HomeController@increment', array($number))}}">Increase {{$number}}</a>

@stop