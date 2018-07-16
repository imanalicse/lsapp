@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    
    <a href="{{url('categories/create')}}" class="btn btn-primary">Create category</a>
    <br><br>
    @if(count($categories) > 0)
        @foreach($categories as $category)
            <div class="well">    
                <h3><a href="{{url('/categories/'.$category->id)}}">{{$category->name}}</a></h3>
                <small>Written on {{$category->created_at}}
                @if(count($category->posts) > 0)
                    |
                    @foreach($category->posts as $post)
                        <a href="{{url('posts/'.$post->id)}}"> {{$post->title}},   
                    @endforeach
                @endif
                </small>        
            </div>
        @endforeach
    @else
        <p>No category found</p>
    @endif
@endsection