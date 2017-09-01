@extends('layouts.master')

@section('title')
<title>Profile for {{ $user->name }}</title>
@stop

@section('content')
    <div class="container">
        <h1>{{ $user->name }}</h1>
        <a href="{{ action('UsersController@edit', $user->id) }}">
            <span class="glyphicon glyphicon-pencil"></span>Edit this user
        </a>
        <p>Email: {{ $user->email }}</p>
        <p>Created at: {{ $user->created_at }} </p>
        <p>Updated at: {{ $user->updated_at }}</p>
    </div>
@stop

