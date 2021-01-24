@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('posts.index')}}" class="btn btn-default">Previous Page</a>
        <div class="card p-3 mt-2 mb-2">
            <h3>{{$post->title}}</a></h3> {{--properties that have been called to create our object.  --}} 
            <img style="width:100%" src="http://localhost/beautyandcosmetics/public/storage/cover_images/{{$post->cover_image}}" alt="An error occurred">
            <hr>          
            <div>
                {!!$post->body!!}
            </div>
            <hr>
            <small>Written On: {{$post->created_at}}</small>  
        </div>
    </div>    
        <div class="col-md-12">
            @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                <a href="http://localhost/beautyandcosmetics/public/posts/{{$post->id}}/edit" class="btn btn-warning">Edit Post</a>
                {!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'POST','class'=>'text-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::Submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close() !!}
                @endif
            @endif
        </div>
@endsection 