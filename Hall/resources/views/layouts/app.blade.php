<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hall Bar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link href="{{asset('/css/app.css')}}" rel="stylesheet">
        <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Hall Bar
                </div>

                <div class="links">
                    <a href = "">Vinyl</a>

                </div>
                 <main class="py-4">
                            @yield('content')
                 </main>
            </div>
        </div>
    </body>
</html>
