@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
    
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img width="100%" src="{{url('public/storage/cover_image/'.$post->cover_image)}}">
                    </div>
                    <div class="col-md-8 col-sm-8">                    
                        <h3><a href="{{url('/posts/'.$post->id)}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} | by {{$post->user->name}}
                            @if(count($post->categories) > 0)
                                |
                                @foreach($post->categories as $category)
                                <a href="{{url('categories/'.$category->id)}}"> {{$category->name}}, </a>
                                @endforeach
                            @endif
                        </small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection