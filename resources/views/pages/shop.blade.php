@extends('layouts.app') 
 
@section('content')
           <h1>{{$title}}</h1>
           @if(count($shop) > 0)
               <ul>
                   @foreach ($shop as $product)
                        <li>{{$product}}</li>                       
                   @endforeach
               </ul>
           @endif
@endsection
        
