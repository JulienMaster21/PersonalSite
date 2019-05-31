<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="My Portfolio site">
        <meta name="keywords" content="Awesome, Amazing, Stunning">
        <meta name="author" content="Julien Kenneth Pleijte">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{asset("css/reset.css")}}" type="text/css" rel="stylesheet">
        <link href="{{asset("css/app.css")}}" type="text/css" rel="stylesheet">
        <link href="{{asset("css/general.css")}}" type="text/css" rel="stylesheet">
        <link href="{{asset("images/admech_logo.ico")}}" type="image/ico" rel="icon">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>@yield("title")</title>
    </head>
    <body>
        <div class="text-center pt-4 px-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield("content")
        </div>
    </body>
    <script src="{{asset("js/general.js")}}" rel="javascript"></script>
    <script src="{{asset("js/app.js")}}" rel="javascript"></script>
</html>
