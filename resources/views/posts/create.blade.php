@extends('layouts.app')

@section('content')
    <h1>Create post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-controll', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-controll', 'placeholder' => 'Body text'])}}
        </div>

        <div class="form-group">
        @if(count($categories) > 0)        
            @foreach($categories as $category)                
            {{ Form::checkbox('categories[]', $category->id) }}
            {{$category->name}}   
            @endforeach
        @endif
        </div>

        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}

@endsection