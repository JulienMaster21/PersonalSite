@extends('templates/emptyPage')
@section("title", "Maak Opdracht")
@section("content")
    <div class="container">
        <form action="/assignments" method="POST" id="form">
            @csrf
            <div class="form-group">
                <label for="name">Naam:</label>
                <input id="name" required type="text" name="name"
                        @if (old("name") !== NULL)
                        value="{{old("name")}}"
                        @else

                        @endif
                       placeholder="Voer een naam in tussen 6 en 255 karakters" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een naam in tussen 6 en 255 karakters" onblur="checkName();">
            </div>
            <div class="form-group">
                <label for="url">Afbeeldinglocatie:</label>
                <input id="url" required type="text" name="url"
                       @if (old("url") !== NULL)
                       value="{{old("url")}}"
                       @else

                       @endif
                       placeholder="Voer een geldige bestandslocatie in" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een geldige bestandslocatie in" onblur="checkURL();">
            </div>
            <div class="form-group">
                <label for="description">Beschrijving: </label>
                <input id="description" required type="text" name="description"
                       @if (old("description") !== NULL)
                       value="{{old("description")}}"
                       @else

                       @endif
                       placeholder="Voer een beschrijving in tussen 6 en 255 karakters" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een beschrijving in tussen 6 en 255 karakters" onblur="checkDescription();">
            </div>
            <div class="container mb-3">
                <button type="submit">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="container">
        <form action="{{ route("assignments.index" )}}" method="get">
            <button type="submit">
                <i class="fas fa-ban"></i>
            </button>
        </form>
    </div>
    <script rel="javascript" src="{{ asset("js/validateAssignment.js") }}"></script>
@endsection
