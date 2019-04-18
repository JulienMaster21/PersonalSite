@extends('templates/emptyPage')
@section("title", "Cursus $course->id")
@section("content")
    <h3 class="center">Cursus</h3>
        <div class="flex">
            <h3>{{$course->name}}</h3>
        </div>
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
