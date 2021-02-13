<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Sculpture Classic Fitness Gym </title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">     

    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 

    <!-- Styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container-fluid">
        <div id="app">
             <main class="py-4">            
                    {{-- @include('include.navbar') --}}
                    @include('include.messages')
                    @yield('content')             
                <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
                <script>
                    CKEDITOR.replace('summary-ckeditor');
                </script>  
            </main>
        </div>
    </div>
</body>
</html>
