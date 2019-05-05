@extends('templates/emptyPage')
@section("title", "Blok $blok->id")
@section("content")
    <h3 class="center">Blok</h3>
        <div class="flex">
            <h3>{{$blok->id}}</h3>
        </div>
    <h3 class="center">Cursussen</h3>
        @if ($blok->courses->isEmpty())
            <div class="flex">
                <h3>Geen</h3>
            </div>
        @else
            @foreach ($courses->where("blok_id", "=", $blok->id) as $course)
                    <div class="flex">
                        <h3>
                            <a class="link" href="/courses/{{ $course->id }}">{{ $course->name }}</a>
                        </h3>
                    </div>
            @endforeach
        @endif
        <div class="flex marginbottom">
            <form action="/bloks" method="post">
                @csrf
                <button type="submit" name="id" value="{{ $bloks->last()->id + 1 }}">
                    <i class="fas fa-plus"></i>
                </button>
            </form>
        </div>
        @if (count($bloks) == 1)

        @else
            <div class="flex marginbottom">
                <form action="/bloks/{{$blok->id}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        @endif
        <div class="flex">
            <a class="notDecorated" href="{{route("tests.index")}}">
                <div class="divButton">
                    <i class="fas fa-arrow-left"></i>
                </div>
            </a>
        </div>
