@extends('templates/emptyPage')
@section("title", "Toets $test->id")
@section("content")
    <h3 class="center">Toets</h3>
        <div class="flex">
            <h3>{{ $test->name }}</h3>
        </div>
    <h3 class="center">Behaald?</h3>
        <div class="flex">
            <h3>{{ $test->completed ? "Ja" : "Nee" }}</h3>
        </div>
    <h3 class="center">Cijfer</h3>
        <div class="flex">
            <h3>{{ $test->grade }}</h3>
        </div>
    <h3 class="center">EC's</h3>
        <div class="flex">
            <h3>{{ $test->EC }}</h3>
        </div>
    <h3 class="center">Cursus</h3>
        <div class="flex">
            @if ($test->course_id == NULL)
                <h3>Geen</h3>
            @else
                <h3>
                    <a href="/courses/{{ $course->id }}">{{ $course->name }}</a>
                </h3>
            @endif
        </div>
        <div class="flex marginbottom">
            <a href="{{route("tests.create")}}">
                <div class="divButton">
                    <i class="fas fa-plus"></i>
                </div>
            </a>
        </div>
        <div class="flex marginbottom">
            <form action="/tests/{{$test->id}}/edit" method="GET">
                <button type="submit">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </form>
        </div>
        <div class="flex marginbottom">
            <form action="/tests/{{$test->id}}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        </div>
        <div class="flex">
            <a href="{{route("tests.index")}}">
                <div class="divButton">
                    <i class="fas fa-arrow-left"></i>
                </div>
            </a>
        </div>
