@extends("layouts.app")

@section('content')
    <div class="jumbotron text-align-center">
        <h1>{{$title}}</h1>
        <p>This is the laravel application from the 'laravel from scratch' </p>
        <p><a class="button btn-primary" href="/lsapp/login">Login</a> <a class="button btn-primary" href="/lsapp/register">Register</a> </p>
    </div>
@endsection