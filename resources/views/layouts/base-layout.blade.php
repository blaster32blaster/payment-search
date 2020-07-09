<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- compiled stylesheet --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            #app {
                margin: 2rem!important;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="root-content" id="app">
            @yield('content')
        </div>
    </body>

    {{-- compiled js file --}}
    <script>
        window.echoConfig = {
            host: {!! json_encode(config('echo.host')) !!},
            port: {!! json_encode(config('echo.port')) !!}
        };
    </script>
    <script src="//{{ config('echo.host') . ':' . config('echo.port')  }}/socket.io/socket.io.js"></script>
    <script src="{{ asset('js/app.js')}}"></script>

</html>
