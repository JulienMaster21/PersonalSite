@extends('templates/emptyPage')
@section("title", "Blok $blok->id")
@section("content")
    <h3 class="center">Blok</h3>
        <div class="flex">
            <h3>{{$blok->id}}</h3>
        </div>

        <div class="flex marginbottom">
            <form action="/bloks" method="post">
                @csrf
                <button type="submit" name="id" value="{{ $bloks->last()->id + 1 }}">
                    <i class="fas fa-plus"></i>
                </button>
            </form>
        </div>
        <div class="flex marginbottom">
            <form action="/bloks/{{$blok->id}}" method="POST">
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
