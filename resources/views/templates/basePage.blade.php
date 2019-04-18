<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="My Portfolio site">
        <meta name="keywords" content="Awesome, Amazing, Stunning">
        <meta name="author" content="Julien Kenneth Pleijte">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{asset("css/reset.css")}}" type="text/css" rel="stylesheet"></link>
        <link href="{{asset("css/general.css")}}" type="text/css" rel="stylesheet"></link>
        <link href="{{asset("images/admech_logo.ico")}}" type="image/ico" rel="icon"></link>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>@yield("title")</title>
    </head>
    <body>
        <!--Profile bar-->
        <section class="profile_bar">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">
                    <i class="fas fa-user"></i>
                </button>
            </form>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </form>
        </section>
        <!--Mobile dropdown menu-->
        <section class="hamburger_button" onclick="menu();">
            <div></div>
            <div></div>
            <div></div>
        </section>
        <!--Mobile navbar-->
        <section class="mobile_navbar" id="dropdown">
            @if (url()->current() == "http://portfolio.test")
                <div class="mobile_navbutton_active">Home</div>
            @else
                <a href="{{route("home")}}"><div class="mobile_navbutton">Home</div></a>
            @endif
            @if (url()->current() == "http://portfolio.test/over-mij")
                <div class="mobile_navbutton_active">Over mij</div>
            @else
            <a href="{{route("about")}}"><div class="mobile_navbutton">Over mij</div></a>
            @endif
            @if (url()->current() == "http://portfolio.test/dashboard")
                <div class="mobile_navbutton_active">Dashboard</div>
            @else
            <a href="{{route("tests.index")}}"><div class="mobile_navbutton">Dashboard</div></a>
            @endif
            @if (url()->current() == "http://portfolio.test/beroepsbeeld")
                <div class="mobile_navbutton_active">Beroepsbeeld</div>
            @else
            <a href="{{route("beroepsbeeld")}}"><div class="mobile_navbutton">Beroepsbeeld</div></a>
            @endif
            @if (url()->current() == "http://portfolio.test/motivatie")
                <div class="mobile_navbutton_active">Motivatie</div>
            @else
            <a href="{{route("motivatie")}}"><div class="mobile_navbutton">Motivatie</div></a>
            @endif
            @if (url()->current() == "http://portfolio.test/assignments")
                <div class="mobile_navbutton_active">Opdrachten</div>
            @else
            <a href="{{route("assignments.index")}}"><div class="mobile_navbutton">Opdrachten</div></a>
            @endif
        </section>
        <!--Desktop navbar-->
        <section class="navbar">
            <div class="navcontainer">
                @if (url()->current() == "http://portfolio.test")
                    <div class="navbutton_active">Home</div>
                @else
                    <a href="{{route("home")}}"><div class="navbutton">Home</div></a>
                @endif
                @if (url()->current() == "http://portfolio.test/over-mij")
                    <div class="navbutton_active">Over mij</div>
                @else
                <a href="{{route("about")}}"><div class="navbutton">Over mij</div></a>
                @endif
                @if (url()->current() == "http://portfolio.test/dashboard")
                    <div class="navbutton_active">Dashboard</div>
                @else
                <a href="{{route("dashboard")}}"><div class="navbutton">Dashboard</div></a>
                @endif
                @if (url()->current() == "http://portfolio.test/beroepsbeeld")
                    <div class="navbutton_active">Beroepsbeeld</div>
                @else
                <a href="{{route("beroepsbeeld")}}"><div class="navbutton">Beroepsbeeld</div></a>
                @endif
                @if (url()->current() == "http://portfolio.test/motivatie")
                    <div class="navbutton_active">Motivatie</div>
                @else
                <a href="{{route("motivatie")}}"><div class="navbutton">Motivatie</div></a>
                @endif
                @if (url()->current() == "http://portfolio.test/assignments")
                    <div class="navbutton_active">Opdrachten</div>
                @else
                <a href="{{route("assignments.index")}}"><div class="navbutton">Opdrachten</div></a>
                @endif
            </div>
        </section>
        <main class="content">
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
        </main>
    </body>
    <script src="{{asset("js/general.js")}}" rel="javascript"></script>
    <script src="{{asset("js/app.js")}}" rel="javascript"></script>
</html>
