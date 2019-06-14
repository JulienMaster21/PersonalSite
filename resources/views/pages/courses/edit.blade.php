@extends("templates/emptyPage")
@section("title", "Pas Cursus aan")
@section("content")
    <p>* Verplicht</p>
    <div class="container mb-3">
        <form action="/courses/{{ $course->id }}" method="POST">
            @method("PATCH")
            @csrf
            <div class="form-group mb-3">
                <label for="name">*Cursus:</label>
                <input id="name" required type="text" name="name" value="{{ $course->name }}"
                       placeholder="Voer een naam in tussen 6 en 255 karakters" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een naam in tussen 6 en 255 karakters" onblur="checkName();">
            </div>
            <div class="form-group mb-5">
                <label for="blok_id">Blok:</label>
                <select id="blok_id" name="blok_id" class="form-control"
                        data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                        data-content="Alle waarden in de dropdown zijn toegestaan, inclusief geen"
                        onblur="checkBlok();">
                    <option value="" @if ($course->blok_id === NULL) selected @endif>Geen</option>
                    @foreach ($bloks as $blok)
                        <option value="{{ $blok->id }}"
                                @if ($course->blok_id === $blok->id)
                                    selected
                                @endif>Blok {{ $blok->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="container">
                <button type="submit">
                    <i class="fas fa-check"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="container">
        <form action="{{ url()->previous() }}">
            <button type="submit">
                <i class="fas fa-ban"></i>
            </button>
        </form>
    </div>
    <script rel="javascript" src="{{ asset("js/validateCourse.js") }}"></script>
@endsection
