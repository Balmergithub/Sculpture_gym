@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('posts.index')}}" class="btn btn-default">Previous Page</a>
         <h3>{{$post->title}}</a></h3> {{--properties that have been called to create our object.  --}}
        <small>Written On: {{$post->created_at}}</small>
        <div class="card p-3 mt-2 mb-2">
             {!!$post->body!!} 
        </div>
    </div>
@endsection