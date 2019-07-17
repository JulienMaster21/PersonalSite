@extends("templates/emptyPage")
@section("title", "Pas Toets aan")
@section("content")
    <p>* Verplicht</p>
    <div class="container">
        <form action="/tests/{{ $test->id }}" method="POST" id="form">
            @method("PATCH")
            @csrf
            <div class="form-group">
                <label for="name">*Naam:</label>
                <input id="name" required type="text" name="name" value="{{ $test->name }}"
                       placeholder="Voer een naam in tussen 6 en 255 karakters" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een naam in tussen 6 en 255 karakters" onblur="checkName();">
            </div>
            <div class="form-group">
                <label for="grade">Cijfer:</label>
                <input id="grade" required type="text" name="grade" value="{{ $test->grade }}"
                       placeholder="Voer een cijfer tussen 1 en 10 in" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een cijfer tussen 1 en 10 in" onblur="checkGrade();">
            </div>
            <div class="form-check mb-3">
                <input id="completed" type="checkbox" name="completed" value="1"
                       @if ($test->completed === 1)
                            checked
                       @endif
                       class="form-check-input" onblur="checkCompleted();">
                <label for="completed" class="form-check-label">voldoende?</label>
            </div>
            <div class="form-group">
                <label for="EC">*EC waarde:</label>
                <input id="EC" required type="text" name="EC" value="{{ $test->EC }}"
                       placeholder="Voer een cijfer in tussen 1 en 10" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een cijfer tussen 1 en 10 in" onblur="checkEC();">
            </div>
            <div class="form-group">
                <label for="course_id">Cursus:</label>
                <select id="course_id" name="course_id" class="form-control"
                        data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                        data-content="Alle waarden in de dropdown zijn toegestaan, inclusief geen"
                        onblur="checkCourse();">
                    <option value=""
                    @if ($test->course_id === NULL)
                        selected
                    @endif>Geen</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}"
                        @if ($test->course_id === $course->id)
                            selected
                        @endif>{{ $course->name }}</option>
                    @endforeach
                </select>
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
    <script rel="javascript" src="{{ secure_asset("js/validateTest.js") }}"></script>
@endsection
