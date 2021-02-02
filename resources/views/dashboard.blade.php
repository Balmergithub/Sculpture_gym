@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h3>Your Blog Post</h3> 
                    @if (count($posts) > 0)                            
                        <a href="http://localhost/sculpture_gym/public/posts/create" class="btn btn-primary mb-2">Create Posts</a>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>                        
                                <td><a href="http://localhost/sculpture_gym/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                <td>{!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'POST','class'=>'text-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::Submit('Delete',['class'=>'btn btn-danger'])}}
                                    {!!Form::close() !!}
                                </td>
                            </tr>                                 
                            @endforeach
                        </table>             
                    @else                      
                        <p>You have no Post!!</p>
                    @endif                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
