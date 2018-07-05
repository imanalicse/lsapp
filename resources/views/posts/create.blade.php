@extends('layouts.app')

@section('content')
    <h1>Create post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'post']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-controll', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-controll', 'placeholder' => 'Body text'])}}
        </div>
        
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}

@endsection