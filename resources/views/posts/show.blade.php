@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="http://localhost/beautyandcosmetics/public/posts" class="btn btn-default">Previous Page</a>
        <h3>{{$post->title}}</a></h3>
        <small>Written On: {{$post->created_at}}</small>
        <div class="card p-3 mt-2 mb-2">
             {{$post->body}} 
        </div>
    </div>
@endsection