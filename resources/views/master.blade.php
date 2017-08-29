<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="text-center hidden-md-down" style="font-family: 'Lobster', cursive; font-size: 70px; opacity: 0.7">V.A.L</div>

        @include('partials._nav')

        <div class="container pt-5">
            @yield('content')
        </div>

        <script src="{{asset('/js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
