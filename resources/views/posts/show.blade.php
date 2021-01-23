@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('posts.index')}}" class="btn btn-default">Previous Page</a>
         <h3>{{$post->title}}</a></h3> {{--properties that have been called to create our object.  --}}
        <small>Written On: {{$post->created_at}}</small>
        <div class="card p-3 mt-2 mb-2">
             {!!$post->body!!} 
        </div>
        <div class="col-md-12">
            <a href="http://localhost/beautyandcosmetics/public/posts/{{$post->id}}/edit" class="btn btn-warning">Edit Post</a>
            {!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'POST','class'=>'text-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::Submit('Delete',['class'=>'btn btn-danger'])}}
            {!!Form::close() !!}
        </div>
    </div>
@endsection 