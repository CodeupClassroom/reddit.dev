@extends('layouts.master')

@section('title')
    <title>lowerCased some word!</title>
@stop

@section('content')
    <h1>lowerCased: {{ $word }}</h1>
    <a href="{{ action('HomeController@uppercase', array($word)) }}">Make {{$word}} uppercase</a>
@stop