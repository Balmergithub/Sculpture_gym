<!DOCTYPE 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="{{asset('css/app.css')}}">       
        <title>{{config('app.name', 'indianabeautyandcosmetics')}}</title>        
    </head>
    <body>
         @yield('content')
    </body>
</html>
