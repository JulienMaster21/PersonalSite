@extends('templates/emptyPage')
@section("title", "Cursus $course->id")
@section("content")
    <h3 class="text-center">Cursus: {{ $course->name }}</h3>
    <h3 class="text-center">
        @if ($course->blok_id == NULL)
            Blok: Geen
        @else
            <a class="link" href="/bloks/{{ $blok->id }}">Blok: {{ $blok->id }}</a>
        @endif
    </h3>
    <h3 class="text-center">Toetsen:</h3>
        @if ($course->tests->isEmpty())
            <div class="container mb-3">
                <h3>Geen</h3>
            </div>
        @else
            @foreach ($tests->where("course_id", "=", $course->id) as $test)
                <div class="container mb-3">
                    <h3>
                        <a class="link" href="/tests/{{ $test->id }}">{{ $test->name }}</a>
                    </h3>
                </div>
            @endforeach
        @endif
    <h3 class="text-center">Gemaakt op: {{ $course->created_at }}</h3>
    <h3 class="text-center mb-5">Laatst aangepast op: {{ $course->updated_at }}</h3>
    @can('create', $course)
        <div class="container mb-3">
            <form action="{{ route("courses.create") }}" method="get">
                <button type="submit">
                    <i class="fas fa-plus"></i>
                </button>
            </form>
        </div>
    @endcan
    @can('update', $course)
        <div class="container mb-3">
            <form action="/courses/{{$course->id}}/edit" method="GET">
                <button type="submit">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </form>
        </div>
    @endcan
    @can('delete', $course)
        {{-- Check to see if this is the final course --}}
        @if (count($courses) === 1)

        @else
            <div class="container mb-3">
                <form action="/courses/{{$course->id}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        @endif
    @endcan
    <div class="container">
        <form action="{{ route("tests.index") }}" method="get">
            <button type="submit">
                <i class="fas fa-arrow-left"></i>
            </button>
        </form>
    </div>
@endsection
