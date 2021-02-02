@extends('layouts.app') 
 
@section('content')
           <h1>{{$title}}</h1>
           @if(count($schedules) > 0)
               <ul class="list-group">
                   @foreach ($schedules as $schedule)
                        <li class="list-group-item">{{$schedule}}</li>                       
                   @endforeach
               </ul>
           @endif
@endsection