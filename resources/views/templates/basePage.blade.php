<!DOCTYPE html>
<html id="html" lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="My Portfolio site">
        <meta name="keywords" content="Awesome, Amazing, Stunning">
        <meta name="author" content="Julien Kenneth Pleijte">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ secure_asset("css/reset.css") }}" type="text/css" rel="stylesheet">
        <link href="{{ secure_asset("css/app.css") }}" type="text/css" rel="stylesheet">
        <link href="{{ secure_asset("css/general.css") }}" type="text/css" rel="stylesheet">
        <link href="{{ secure_asset("images/admech_logo.ico") }}" type="image/ico" rel="icon">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>@yield("title")</title>
    </head>
    <body>
        <!-- Profile bar -->
        <section class="row my-3 m-0">
            <!-- Language options -->
            <div class="col-6 d-flex">
                <form action="{{ url('locale/en') }}" method="get">
                    <button type="submit">
                        <img class="imageButton" src="{{ secure_asset('images/unionjack.svg') }}">
                    </button>
                </form>
                <form class="ml-3" action="{{ url('locale/nl') }}" method="get">
                    <button type="submit">
                        <img class="imageButton" src="{{ secure_asset('images/dutchflag.svg') }}">
                    </button>
                </form>
            </div>
            <!-- Profile Cruds -->
            <!-- Check if user is logged in -->
            @if (\Illuminate\Support\Facades\Auth::check())
                <div class="col-6 d-flex justify-content-end">
                    <form action="{{ route('userPage') }}" method="get">
                        <button type="submit">
                            <i class="fas fa-user"></i>
                        </button>
                    </form>
                    @can('view', $user)
                        <div class="ml-3">
                            <a href="{{ route("users.index") }}">
                                <button type="button">
                                    <i class="fas fa-users"></i>
                                </button>
                            </a>
                        </div>
                    @endcan
                    @can('view', $role)
                        <div class="ml-3">
                            <a href="{{ route("roles.index") }}">
                                <button type="button">
                                    <i class="fas fa-user-tag"></i>
                                </button>
                            </a>
                        </div>
                    @endcan
                    <form class="mx-3" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </form>
                </div>
            @else
                <div class="col-6 d-flex justify-content-end">
                    <form class="mx-3" action="{{ route('login') }}" method="get">
                        <button type="submit">
                            <i class="fas fa-sign-in-alt"></i>
                        </button>
                    </form>
                </div>
            @endif
        </section>
        <!-- Mobile dropdown menu -->
        <section>
            <button class="hamburger_button btn-lg ml-4" type="button" onclick="menu();">
                <i class="fa fa-bars"></i>
            </button>
        </section>
        <!-- Mobile navbar -->
        <section class="mobile_navbar text-center container" id="dropdown">
            @if (url()->current() === route('home'))
                <div class="mobile_navbutton_active">
                    <h3>{{ ucfirst(__('miscellaneous.home')) }}</h3>
                </div>
            @else
                <a href="{{ route("home") }}">
                    <div class="mobile_navbutton">
                        <h3>{{ ucfirst(__('miscellaneous.home')) }}</h3>
                    </div>
                </a>
            @endif
            @if (url()->current() === route('about'))
                <div class="mobile_navbutton_active">
                    <h3>{{ ucfirst(__('miscellaneous.about')) }}</h3>
                </div>
            @else
            <a href="{{ route("about") }}">
                <div class="mobile_navbutton">
                    <h3>{{ ucfirst(__('miscellaneous.about')) }}</h3>
                </div>
            </a>
            @endif
            <!-- Check if user is logged in -->
            @if (\Illuminate\Support\Facades\Auth::check())
                @if (url()->current() === route('dashboard'))
                    <div class="mobile_navbutton_active">
                        <h3>{{ ucfirst(__('miscellaneous.dashboard')) }}d</h3>
                    </div>
                @else
                <a href="{{ route("dashboard") }}">
                    <div class="mobile_navbutton">
                        <h3>{{ ucfirst(__('miscellaneous.dashboard')) }}</h3>
                    </div>
                </a>
                @endif
            @endif
            @if (url()->current() === route('careerResearch'))
                <div class="mobile_navbutton_active">
                    <h3>{{ ucfirst(__('miscellaneous.careerResearch')) }}</h3>
                </div>
            @else
            <a href="{{ route("careerResearch") }}">
                <div class="mobile_navbutton">
                    <h3>{{ ucfirst(__('miscellaneous.careerResearch')) }}</h3>
                </div>
            </a>
            @endif
            @if (url()->current() === route('motivation'))
                <div class="mobile_navbutton_active">
                    <h3>{{ ucfirst(__('miscellaneous.motivation')) }}</h3>
                </div>
            @else
            <a href="{{ route("motivation") }}">
                <div class="mobile_navbutton">
                    <h3>{{ ucfirst(__('miscellaneous.motivation')) }}</h3>
                </div>
            </a>
            @endif
            <!-- Check if user is logged in -->
            @if (\Illuminate\Support\Facades\Auth::check())
                @if (url()->current() === route('assignments.index'))
                    <div class="mobile_navbutton_active">
                        <h3>{{ ucfirst(__('models.assignment.plural')) }}</h3>
                    </div>
                @else
                <a href="{{ route("assignments.index") }}">
                    <div class="mobile_navbutton">
                        <h3>{{ ucfirst(__('models.assignment.plural')) }}</h3>
                    </div>
                </a>
                @endif
            @endif
        </section>
        <!--Desktop navbar-->
        <section class="navbar row text-center p-0 m-0 container-fluid">
                @if (url()->current() === route('home'))
                    <div class="col-2 py-5 navbutton_active">
                        <h3>{{ ucfirst(__('miscellaneous.home')) }}</h3>
                    </div>
                @else
                    <a class="col-2 p-0" href="{{ route("home") }}">
                        <div class="py-5 navbutton">
                            <h3>{{ ucfirst(__('miscellaneous.home')) }}</h3>
                        </div>
                    </a>
                @endif
                @if (url()->current() === route('about'))
                    <div class="col-2 py-5 navbutton_active">
                        <h3>{{ ucfirst(__('miscellaneous.about')) }}</h3>
                    </div>
                @else
                    <a class="col-2 p-0" href="{{ route("about") }}">
                        <div class="py-5 navbutton">
                            <h3>{{ ucfirst(__('miscellaneous.about')) }}</h3>
                        </div>
                    </a>
                @endif
                <!-- Check if user is logged in -->
                @if (\Illuminate\Support\Facades\Auth::check())
                    @if (url()->current() === route('dashboard'))
                        <div class="col-2 py-5 navbutton_active">
                            <h3>{{ ucfirst(__('miscellaneous.dashboard')) }}</h3>
                        </div>
                    @else
                        <a class="col-2 p-0" href="{{ route("dashboard" )}}">
                            <div class="py-5 navbutton">
                                <h3>{{ ucfirst(__('miscellaneous.dashboard')) }}</h3>
                            </div>
                        </a>
                    @endif
                @endif
                @if (url()->current() === route('careerResearch'))
                    <div class="col-2 py-5 navbutton_active">
                        <h3>{{ ucfirst(__('miscellaneous.careerResearch')) }}</h3>
                    </div>
                @else
                    <a class="col-2 p-0" href="{{ route("careerResearch") }}">
                        <div class="py-5 navbutton">
                            <h3>{{ ucfirst(__('miscellaneous.careerResearch')) }}</h3>
                        </div>
                    </a>
                @endif
                @if (url()->current() === route('motivation'))
                    <div class="col-2 py-5 navbutton_active">
                        <h3>{{ ucfirst(__('miscellaneous.motivation')) }}</h3>
                    </div>
                @else
                    <a class="col-2 p-0" href="{{ route("motivation") }}">
                        <div class="py-5 navbutton">
                            <h3>{{ ucfirst(__('miscellaneous.motivation')) }}</h3>
                        </div>
                    </a>
                @endif
                <!-- Check if user is logged in -->
                @if (\Illuminate\Support\Facades\Auth::check())
                    @if (url()->current() === route('assignments.index'))
                        <div class="col-2 py-5 navbutton_active">
                            <h3>{{ ucfirst(__('models.assignment.plural')) }}</h3>
                        </div>
                    @else
                        <a class="col-2 p-0" href="{{ route("assignments.index") }}">
                            <div class="py-5 navbutton">
                                <h3>{{ ucfirst(__('models.assignment.plural')) }}</h3>
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
