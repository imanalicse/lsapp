@extends('layouts.app')

@section('content')

    <h1>Category</h1>

    {!! Form::open(['action' => ['CategoriesController@update', $category->id], 'method' => 'PUT']) !!}

        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $category->name, ['class' => 'form-controll', 'placeholder' => 'Name'])}}
        </div>      
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}

@endsection