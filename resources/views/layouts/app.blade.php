<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

</head>
<body id="app-layout">
    <div id="app">
        <header>
            @include('layouts._admin._nav')
        </header>

        <main class="py-4">
            @if(Session::has('mensagem'))
                <div class="container">
                    <div class="row">
                        <div class="card {{ Session::get('mensagem')['class'] }}">
                            <div class="card-content" align="center"> {{ Session::get('mensagem')['msg'] }}
                            </div>
                        </div>    
                    </div>
                </div>
            @endif


            @yield('content')
        </main>

        @include('layouts._admin._footer')
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

    <script src="{{asset('js/init.js')}}"></script>

</body>
</html>
