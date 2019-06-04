@extends('templates/emptyPage')
@section("title", "Maak Toets")
@section("content")
    <p>* Verplicht</p>
    <div class="container">
        <form action="/tests" method="POST" id="form">
            @csrf
            <div class="form-group">
                <label for="name">*Naam:</label>
                <input id="name" required type="text" name="name"
                       placeholder="Voer een naam in tussen 6 en 255 karakters" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een naam in tussen 6 en 255 karakters" onblur="checkName();">
            </div>
            <div class="form-group">
                <label for="grade">Cijfer:</label>
                <input id="grade" required type="text" name="grade"
                       placeholder="Voer een cijfer tussen 1 en 10 in" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Voer een cijfer tussen 1 en 10 in" onblur="checkGrade();">
            </div>
            <div class="form-check mb-3">
                <input id="completed" type="checkbox" name="completed" value="completed"
                       class="form-check-input" onblur="checkCompleted();">
                <label for="completed" class="form-check-label">voldoende?</label>
            </div>
            <div class="form-group">
                <label for="EC">*EC waarde:</label>
                <input id="EC" required type="text" name="EC"
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
                    <option value="">Geen</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex">
                <button type="submit">
                    <i class="fas fa-check"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="flex">
        <a class="notDecorated" href="{{ url()->previous() }}">
            <div class="divButton">
                <i class="fas fa-ban"></i>
            </div>
        </a>
    </div>
    <script rel="javascript" src="{{ asset("js/validateTest.js") }}"></script>
@endsection
