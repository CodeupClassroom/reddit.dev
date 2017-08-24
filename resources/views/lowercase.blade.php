@extends('layouts.master')

@section('title')
    <title>lowerCased some word!</title>
@stop

@section('content')
    <h1>lowerCased: {{ $word }}</h1>
@stop