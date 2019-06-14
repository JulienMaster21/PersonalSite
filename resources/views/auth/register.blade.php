@extends("templates/emptyPage")
@section("title", "Registreren")
@section("content")
    <div class="container">
        <h3 class="mb-3">Registreer</h3>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Naam:</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group">
                <label for="password-confirm">Bevestig wachtwoord:</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn-lg">
                    Registreer
                </button>
            </div>
        </form>

        <form action="{{ route('login') }}" method="get">
            <button type="submit" class="btn-lg">
                <i class="fas fa-arrow-left"></i>
            </button>
        </form>
    </div>
@endsection
