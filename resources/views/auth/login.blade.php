@extends("templates/emptyPage")
@section("title", "Login")
@section("content")
    <h1 class="mb-5">JulienMaster's Portfolio</h1>
    <h3 class="mb-3">Login</h3>

    <div class="container">
        <form id="form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                       autofocus placeholder="Voer een geldig emailadres in de vorm van gebruiker@example.com in"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een geldig emailadres in de vorm van gebruiker@example.com in"
                       onblur="checkEmail();">
            </div>

            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input id="password" type="password" class="form-control" name="password" required
                       placeholder="Voer een wachtwoord in van minimaal 8 karakters" data-trigger="focus"
                       data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een wachtwoord in van minimaal 8 karakters" onblur="checkPassword();">
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        Onthoud mij
                    </label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn-lg">
                    Login
                </button>
            </div>

            <div class="form-group">
                <a class="link" href="{{ route('register') }}">
                    Geen account?
                </a>
            </div>
        </form>
    </div>
    <script rel="javascript" src="{{ secure_asset("js/validateLogin.js") }}"></script>
@endsection
