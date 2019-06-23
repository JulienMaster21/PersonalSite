@extends("templates/emptyPage")
@section("title", "Registreren")
@section("content")
    <div class="container">
        <h3 class="mb-3">Registreer</h3>

        <form id="form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Naam:</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                       autofocus placeholder="Voer een naam in van minimaal 6 tot 255 karakters"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een naam in van minimaal 6 tot 255 karakters" onblur="checkName();">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                       placeholder="Voer een geldig emailadres in de vorm van gebruiker@example.com in"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een geldig emailadres in de vorm van gebruiker@example.com in"
                       onblur="checkEmail();">
            </div>

            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input id="password" type="password" class="form-control" name="password" required
                       placeholder="Voer een wachtwoord in van minimaal 8 karakters"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een wachtwoord in van minimaal 8 karakters" onblur="checkPassword();">
            </div>

            <div class="form-group">
                <label for="confirmPassword">Bevestig wachtwoord:</label>
                <input id="confirmPassword" type="password" class="form-control" name="password_confirmation" required
                       placeholder="Voer het wachtwoord nog een keer in"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer het wachtwoord nog een keer in" onblur="checkConfirmPassword();">
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
    <script rel="javascript" src="{{ secure_asset("js/validateRegister.js") }}"></script>
@endsection
