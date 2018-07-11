@extends('layouts.app')

@section('content')

    <h1>Create Category</h1>

    {!! Form::open(['action' => 'CategoriesController@store', 'method' => 'post']) !!}

        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-controll', 'placeholder' => 'Name'])}}
        </div>        
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}

@endsection