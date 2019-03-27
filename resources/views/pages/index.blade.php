@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to my website!</h1>
        <p class="lead">This website is made using Laravel 5.8</p>
        <hr class="my-4">
        <p>This site was made for learning Laravel framework.</p>
        <a class="btn btn-primary btn-lg" href="https://github.com/fuadps" role="button"><i class="fab fa-github"></i> @fuadps</a>
    </div>
@endsection