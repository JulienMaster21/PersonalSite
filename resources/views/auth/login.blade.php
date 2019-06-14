@extends("templates/emptyPage")
@section("title", "Login")
@section("content")
    <h1 class="mb-5">JulienMaster's Portfolio</h1>
    <h3 class="mb-3">Login</h3>

    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input id="password" type="password" class="form-control" name="password" required>
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
@endsection
