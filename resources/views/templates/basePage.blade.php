<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="My Portfolio site">
        <meta name="keywords" content="Awesome, Amazing, Stunning">
        <meta name="author" content="Julien Kenneth Pleijte">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{secure_asset("css/reset.css")}}" type="text/css" rel="stylesheet">
        <link href="{{secure_asset("css/app.css")}}" type="text/css" rel="stylesheet">
        <link href="{{secure_asset("css/general.css")}}" type="text/css" rel="stylesheet">
        <link href="{{secure_asset("images/admech_logo.ico")}}" type="image/ico" rel="icon">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>@yield("title")</title>
    </head>
    <body>
        <!-- Profile bar -->
        <!-- Check if user is logged in -->
        @if (\Illuminate\Support\Facades\Auth::check())
            <section class="profile_bar d-flex justify-content-end my-3">
                <form action="{{ route('userPage') }}" method="get">
                    <button type="submit">
                        <i class="fas fa-user"></i>
                    </button>
                </form>
                <form class="mx-3" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </section>
        @else
            <section class="profile_bar d-flex justify-content-end my-3">
                <form class="mx-3" action="{{ route('login') }}" method="get">
                    <button type="submit">
                        <i class="fas fa-sign-in-alt"></i>
                    </button>
                </form>
            </section>
        @endif
        <!-- Mobile dropdown menu -->
        <section>
            <button class="hamburger_button btn-lg ml-4" type="button" onclick="menu();">
                <i class="fa fa-bars"></i>
            </button>
        </section>
        <!-- Mobile navbar -->
        <section class="mobile_navbar text-center container" id="dropdown">
            @if (url()->current() == "http://portfolio.test")
                <div class="mobile_navbutton_active">
                    <h3>Home</h3>
                </div>
            @else
                <a href="{{ route("home") }}">
                    <div class="mobile_navbutton">
                        <h3>Home</h3>
                    </div>
                </a>
            @endif
            @if (url()->current() == "http://portfolio.test/over-mij")
                <div class="mobile_navbutton_active">
                    <h3>Over mij</h3>
                </div>
            @else
            <a href="{{ route("about") }}">
                <div class="mobile_navbutton">
                    <h3>Over mij</h3>
                </div>
            </a>
            @endif
            <!-- Check if user is logged in -->
            @if (\Illuminate\Support\Facades\Auth::check())
                @if (url()->current() == "tests")
                    <div class="mobile_navbutton_active">
                        <h3>Dashboard</h3>
                    </div>
                @else
                <a href="{{ route("dashboard") }}">
                    <div class="mobile_navbutton">
                        <h3>Dashboard</h3>
                    </div>
                </a>
                @endif
            @endif
            @if (url()->current() == "http://portfolio.test/beroepsbeeld")
                <div class="mobile_navbutton_active">
                    <h3>Beroepsbeeld</h3>
                </div>
            @else
            <a href="{{ route("beroepsbeeld") }}">
                <div class="mobile_navbutton">
                    <h3>Beroepsbeeld</h3>
                </div>
            </a>
            @endif
            @if (url()->current() == "http://portfolio.test/motivatie")
                <div class="mobile_navbutton_active">
                    <h3>Motivatie</h3>
                </div>
            @else
            <a href="{{ route("motivatie") }}">
                <div class="mobile_navbutton">
                    <h3>Motivatie</h3>
                </div>
            </a>
            @endif
            <!-- Check if user is logged in -->
            @if (\Illuminate\Support\Facades\Auth::check())
                @if (url()->current() == "assignments")
                    <div class="mobile_navbutton_active">
                        <h3>Opdrachten</h3>
                    </div>
                @else
                <a href="{{ route("assignments.index") }}">
                    <div class="mobile_navbutton">
                        <h3>Opdrachten</h3>
                    </div>
                </a>
                @endif
            @endif
        </section>
        <!--Desktop navbar-->
        <section class="navbar row text-center p-0 m-0 container-fluid">
                @if (url()->current() == "tests")
                    <div class="col-2 py-5 navbutton_active">
                        <h3>Home</h3>
                    </div>
                @else
                    <a class="col-2 p-0" href="{{ route("home") }}">
                        <div class="py-5 navbutton">
                            <h3>Home</h3>
                        </div>
                    </a>
                @endif
                @if (url()->current() == "http://portfolio.test/over-mij")
                    <div class="col-2 py-5 navbutton_active">
                        <h3>Over mij</h3>
                    </div>
                @else
                    <a class="col-2 p-0" href="{{ route("about") }}">
                        <div class="py-5 navbutton">
                            <h3>Over mij</h3>
                        </div>
                    </a>
                @endif
                <!-- Check if user is logged in -->
                @if (\Illuminate\Support\Facades\Auth::check())
                    @if (url()->current() == "http://portfolio.test/dashboard")
                        <div class="col-2 py-5 navbutton_active">
                            <h3>Dashboard</h3>
                        </div>
                    @else
                        <a class="col-2 p-0" href="{{ route("dashboard" )}}">
                            <div class="py-5 navbutton">
                                <h3>Dashboard</h3>
                            </div>
                        </a>
                    @endif
                @endif
                @if (url()->current() == "http://portfolio.test/beroepsbeeld")
                    <div class="col-2 py-5 navbutton_active">
                        <h3>Beroepsbeeld</h3>
                    </div>
                @else
                    <a class="col-2 p-0" href="{{ route("beroepsbeeld") }}">
                        <div class="py-5 navbutton">
                            <h3>Beroepsbeeld</h3>
                        </div>
                    </a>
                @endif
                @if (url()->current() == "http://portfolio.test/motivatie")
                    <div class="col-2 py-5 navbutton_active">
                        <h3>Motivatie</h3>
                    </div>
                @else
                    <a class="col-2 p-0" href="{{ route("motivatie") }}">
                        <div class="py-5 navbutton">
                            <h3>Motivatie</h3>
                        </div>
                    </a>
                @endif
                <!-- Check if user is logged in -->
                @if (\Illuminate\Support\Facades\Auth::check())
                    @if (url()->current() == "http://portfolio.test/assignments")
                        <div class="col-2 py-5 navbutton_active">
                            <h3>Opdrachten</h3>
                        </div>
                    @else
                        <a class="col-2 p-0" href="{{ route("assignments.index") }}">
                            <div class="py-5 navbutton">
                                <h3>Opdrachten</h3>
                            </div>
                        </a>
                    @endif
                @endif
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
    <script src="{{secure_asset("js/general.js")}}" rel="javascript"></script>
    <script src="{{secure_asset("js/app.js")}}" rel="javascript"></script>
</html>
