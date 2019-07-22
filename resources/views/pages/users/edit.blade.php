@extends("templates/emptyPage")
@section("title", "Pas Gebruiker aan")
@section("content")
    <p>* Verplicht</p>
    <div class="container">
        <form action="/users/{{ $user->id }}" method="POST" id="form">
            @method("PATCH")
            @csrf
            <div class="form-group">
                <label for="name">*Naam:</label>
                <input id="name" required type="text" name="name" value="{{ $user->name }}"
                       placeholder="Voer een naam in tussen 6 en 255 karakters" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een naam in tussen 6 en 255 karakters" onblur="checkName();">
            </div>
            <div class="form-group">
                <label for="email">*Email:</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required
                       placeholder="Voer een geldig emailadres in de vorm van gebruiker@example.com in"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een geldig emailadres in de vorm van gebruiker@example.com in"
                       onblur="checkEmail();">
            </div>
            <h3 class="mb-3">Rollen:</h3>
            <div class="mb-5">
                @foreach($roles as $role)
                    <div class="form-check">
                        <input id="{{ $role->name }}" name="{{ $role->name }}" class="form-check-input" type="checkbox"
                                data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                                data-content="Klik op de checkbox om de gebruiker deze rol te geven"
                                value="true" onblur="checkUser();"
                                @if($user->roles()->get()->contains($role->id))
                                    checked
                                @endif>
                        <label class="form-check-label" for="{{ $role->name }}">{{ $role->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="container mb-3">
                <button type="submit">
                    <i class="fas fa-check"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="container">
        <form action="{{ url()->previous() }}" method="get">
            <button type="submit">
                <i class="fas fa-ban"></i>
            </button>
        </form>
    </div>
    <script rel="javascript" src="{{ secure_asset("js/validateUser.js") }}"></script>
@endsection
