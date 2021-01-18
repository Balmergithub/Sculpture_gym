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
                        <a href="http://localhost/beautyandcosmetics/public/posts/create" class="btn btn-primary mb-2">Create Posts</a>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
