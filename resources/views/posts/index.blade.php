@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
     @if (count($posts) > 0)
         @foreach ($posts as $post)
           <div class="card p-3 mt-3 mb-3">
               <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <img style="width:100%" src="http://localhost/beautyandcosmetics/public/storage/cover_images/{{$post->cover_image}}" alt="An error occurred">
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <h3><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h3> 
                        <small>Written On: {{$post->created_at}} by {{$post->users['name']}}</small>  {{--error occurred --}}                   
                    </div>
               </div>
           </div>
        @endforeach  
        {{$posts->links()}} 
    @else 
        <p>No Posts Found</p>
    @endif 
@endsection