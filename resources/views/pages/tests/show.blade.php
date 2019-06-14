@extends('templates/emptyPage')
@section("title", "Toets $test->id")
@section("content")
    <h3 class="text-center">Toets: {{ $test->name }}</h3>
    <h3 class="text-center">Behaald: {{ $test->completed === 1 ? "Ja" : "Nee" }}</h3>
    <h3 class="text-center">Cijfer: {{ $test->grade }}</h3>
    <h3 class="text-center">EC's: {{ $test->EC }}</h3>
    <h3 class="text-center mb-3">Cursus:
        @if ($test->course_id === NULL)
            Geen
        @else
            <a class="link" href="/courses/{{ $course->id }}">{{ $course->name }}</a>
        @endif
    </h3>
    <div class="container mb-3">
        <form action="{{ route("tests.create") }}" method="get">
            <button type="submit">
                <i class="fas fa-plus"></i>
            </button>
        </form>
    </div>
    <div class="container mb-3">
        <form action="/tests/{{ $test->id }}/edit" method="GET">
            <button type="submit">
                <i class="fas fa-pencil-alt"></i>
            </button>
        </form>
    </div>
    {{-- Check to see if this is the final tests --}}
    @if (count($tests) === 1)

    @else
        <div class="container mb-3">
            <form action="/tests/{{ $test->id }}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        </div>
    @endif
    <div class="container">
        <form action="{{ route("tests.index") }}" method="get">
            <button type="submit">
                <i class="fas fa-arrow-left"></i>
            </button>
        </form>
    </div>
@endsection
