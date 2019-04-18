@extends('templates/emptyPage')
@section("title", "Maak Toets")
@section("content")
    <form action="/tests" method="POST">
        @csrf
        <h3 class="center">Toets</h3>
            <div class="flex marginbottom">
                <input required type="text" name="name" placeholder="Toets">
            </div>
        <h3 class="center">Behaald?</h3>
            <div class="flex marginbottom">
                <label>Ja<label>
                    <input required type="radio" name="completed" value="true">
                <label>Nee<label>
                    <input required type="radio" name="completed" value="false">
            </div>
        <h3 class="center">Cijfer</h3>
            <div class="flex marginbottom">
                <input required type="text" name="grade" placeholder="Cijfer">
            </div>
        <h3 class="center">EC's</h3>
            <div class="flex marginbottom">
                <input required type="text" name="EC" placeholder="EC's">
            </div>
        <h3 class="center">Cursus</h3>
            <div class="flex marginbottom">
                <select name="course_id">
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                    <option value="">Geen</option>
                </select>
            </div>
        <div class="flex">
            <button type="submit">
                <i class="fas fa-pencil-alt"></i>
            </button>
        </div>
    </form>
    <div class="flex">
        <a href="{{route("tests.index")}}">
            <div class="divButton">
                <i class="fas fa-arrow-left"></i>
            </div>
        </a>
    </div>
@endsection
