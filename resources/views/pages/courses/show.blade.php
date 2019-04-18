@extends('templates/emptyPage')
@section("title", "Cursus $course->id")
@section("content")
    <h3 class="center">Cursus</h3>
        <div class="flex">
            <h3>{{$course->name}}</h3>
        </div>
    <h3 class="center">Blok</h3>
        <div class="flex">
            @if ($course->blok_id == NULL)
                <h3>Geen</h3>
            @else
                <h3>
                    <a class="link" href="/bloks/{{ $blok->id }}">Blok {{ $blok->id }}</a>
                </h3>
            @endif
        </div>
        <h3 class="center">Toetsen</h3>
            @if (count($course->tests) == 0)
                <div class="flex">
                    <h3>Geen</h3>
                </div>
            @else
                @foreach ($tests->where("course_id", "=", $course->id) as $test)
                        <div class="flex">
                            <h3>
                                <a class="link" href="/tests/{{ $test->id }}">{{ $test->name }}</a>
                            </h3>
                        </div>
                @endforeach
            @endif
        <div class="flex marginbottom">
            <a href="{{route("courses.create")}}">
                <div class="divButton">
                    <i class="fas fa-plus"></i>
                </div>
            </a>
        </div>
        <div class="flex marginbottom">
            <form action="/courses/{{$course->id}}/edit" method="GET">
                <button type="submit">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </form>
        </div>
        <div class="flex marginbottom">
            <form action="/courses/{{$course->id}}" method="POST">
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
