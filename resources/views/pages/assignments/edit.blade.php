@extends('templates/emptyPage')
@section("title", "Pas opdracht aan")
@section("content")
    <div class="container">
        <form action="/assignments/{{ $assignment->id }}" method="POST" id="form">
            @method("PATCH")
            @csrf
            <div class="form-group">
                <label for="name">Naam:</label>
                <input id="name" required type="text" name="name" value="{{ $assignment->name }}"
                       placeholder="Voer een naam in tussen 6 en 255 karakters" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een naam in tussen 6 en 255 karakters" onblur="checkName();">
            </div>
            <div class="form-group">
                <label for="url">Afbeeldinglocatie:</label>
                <input id="url" required type="text" name="url" value="{{ $assignment->url }}"
                       placeholder="Voer een geldige bestandslocatie in" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een geldige bestandslocatie in" onblur="checkURL();">
            </div>
            <div class="form-group">
                <label for="description">Beschrijving: </label>
                <input id="description" required type="text" name="description" value="{{ $assignment->description }}"
                       placeholder="Voer een beschrijving in tussen 6 en 255 karakters" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een beschrijving in tussen 6 en 255 karakters" onblur="checkDescription();">
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
    <script rel="javascript" src="{{ secure_asset("js/validateAssignment.js") }}"></script>
@endsection
