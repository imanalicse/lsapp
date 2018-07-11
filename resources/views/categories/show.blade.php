@extends('layouts.app')

@section('content')
    <a href="{{url('categories')}}" class="btn btn-default">Go back</a>
    <h1>{{$category->name}}</h1>
    <hr>
    <small> Written on {{$category->created_at}}</small>    
    <hr>
    @if(!Auth::guest())
        
            <a href="{{url('categories/'.$category->id.'/edit')}}" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['CategoriesController@destroy', $category->id], 'method' => 'POST', 'class'=> 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        
    @endif
@endsection