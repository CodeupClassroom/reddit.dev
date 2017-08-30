@extends('layouts.master')

@section('title')
    <title>Welcome!</title>
@stop

@section('styles')

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        main {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        .content {
            text-align: center;
            display: block;
        }
        .title {
            font-size: 96px;
        }
    </style>

@stop

@section('content')

    <main class="container">
        <div class="content">
            <?php if(isset($fullName)): ?>
                <div class="title">Hi, <?= $fullName ?>!</div>
            <?php else :?>
                <div class="title">Hello, World!</div>
            <?php endif; ?>

            <form method="POST" action="/">
                <input type="text" name="name" placeholder="Input your name">
                <button type="submit">Submit</button>
            </form>

            <a href="{{action('SampleController@processNum', array(1))}}">Process 1</a>
            <a href="{{action('SampleController@processNum', array(2))}}">Process 2</a>
            <a href="{{action('SampleController@processNum', array(3))}}">Process 3</a>
        </div>
    </main>

@stop

