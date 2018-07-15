@extends('layouts.app')

@section('content')
    <h1>Edit post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-controll', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-controll', 'placeholder' => 'Body text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>

        <div class="form-group">
        @if(count($categories) > 0)        
            @foreach($categories as $category)    
            <?php $checked = false; ?>
            @foreach($post->categories as $p_cat)
                @if($category->id === $p_cat->id)                    
                    <?php $checked = true; ?>
                @endif
            @endforeach          
            {{ Form::checkbox('categories[]', $category->id, $checked) }}
            {{$category->name}}   
            @endforeach
        @endif
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}

@endsection