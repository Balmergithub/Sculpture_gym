@extends('layouts.app') 
 
@section('content')
           <h1>{{$title}}</h1>
           @if(count($products) > 0)
               <ul>
                   @foreach ($products as $product)
                        <li>{{$product}}</li>                       
                   @endforeach
               </ul>
           @endif
@endsection