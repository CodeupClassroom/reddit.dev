@extends('layouts.master')

@section('title')
    <title>Roll the Dice!</title>
@stop

@section('content')
    <div class="container">
        @if($guess == $random)
            <h1 class="green">Right!</h1>
        @else
            <h1 class="red">Incorrect guess!</h1>
        @endif
        <h2>Random number:  {{ $random }}</h2>
        <h2>You guessed: {{ $guess }} </h2>
    </div>
    <div class="container">
        @foreach($numbers as $number)
            <p>{{ $number }}</p>
        @endoreach
    </div>
@stop