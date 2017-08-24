@extends('layouts.master')

@section('title')
    <title>Uppercase some word!</title>
@stop

@section('content')
    <h1>uppercasedWord: {{ $word }}</h1>
@stop