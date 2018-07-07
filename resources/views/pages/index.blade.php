@extends("layouts.app")

@section('content')
    <div class="jumbotron text-align-center">
        <h1>{{$title}}</h1>
        <p class="test">This is the laravel application from the 'laravel from scratch' </p>
        <p><a class="btn btn-primary" href="{{url('login')}}">Login</a> <a class="btn btn-primary" href="{{url('register')}}">Register</a> </p>
    </div>
@endsection