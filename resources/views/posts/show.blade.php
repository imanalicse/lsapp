@extends('layouts.app')

@section('content')
    <a href="{{url('posts')}}" class="btn btn-default">Go back</a>
    <h1>{{$post->title}}</h1>
    <img width="100%" src="{{url('public/storage/cover_image/'.$post->cover_image)}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small> Written on {{$post->created_at}}  by {{$post->user->name}}
        @if(count($post->categories) > 0)
            |
            @foreach($post->categories as $category)
            <a href="{{url('categories/'.$category->id)}}"> {{$category->name}}, </a>
            @endforeach
        @endif
    </small>    
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="{{url('posts/'.$post->id.'/edit')}}" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=> 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection