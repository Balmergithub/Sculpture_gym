@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
     @if (count($posts) > 0)
         @foreach ($posts as $post)
           <div class="card p-3 mt-3 mb-3">
                <h3> <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h3> 
                <small>Written On: {{$post->created_at}} by {{$post->users['name']}}</small>  {{--error occurred --}}
           </div>
        @endforeach  
        {{$posts->links()}} 
    @else 
        <p>No Posts Found</p>
    @endif 
@endsection