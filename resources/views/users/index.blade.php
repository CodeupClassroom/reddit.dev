@extends('layouts.master')

@section('title')
<title>All the awesome users</title>
@stop

@section('content')
<div class="container">
    <h1>Users</h1>
    @foreach($users as $user)
        <h2><a href="{{ action('UsersController@show', $user->id) }}">{{ $user->name }}</a></h2>
        <p>Email: {{ $user->email }}</p>
        <p>Created at: {{ $user->created_at }} </p>
        <p>Updated at: {{ $user->updated_at }} </p>
    @endforeach

</div>
@stop