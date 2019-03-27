@extends('templates/emptyPage')
@section("title", "Opdracht")
@section("content")
    <h3 class="center">Toetsonderdeel</h3>
        <div class="flex">
            <h3>{{$test->subject}}</h3>
        </div>
    <h3 class="center">Cursus</h3>
        <div class="flex">
            <h3>{{$test->cursus}}</h3>
        </div>
    <h3 class="center">Blok</h3>
        <div class="flex">
            <h3>{{$test->blok}}</h3>
        </div>
    <h3 class="center">Behaald?</h3>
        <div class="flex">
            <h3>{{$test->completed ? "Ja" : "Nee"}}</h3>
        </div>
    <h3 class="center">Cijfer</h3>
        <div class="flex">
            <h3>{{$test->grade}}</h3>
        </div>
    <h3 class="center">EC's</h3>
        <div class="flex">
            <h3>{{$test->EC}}</h3>
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
