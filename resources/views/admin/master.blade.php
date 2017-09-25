<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/app_admin.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet" type="text/css">

    @yield('custom_stylesheet')

</head>
<body>

@include('admin.partials._nav')

<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
                </li>
            </ul>
        </nav>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            @yield('content')
        </main>
    </div>
</div>

<script src="{{asset('/js/app.js')}}" type="text/javascript"></script>
</body>
</html>
