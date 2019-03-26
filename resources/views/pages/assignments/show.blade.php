@extends('templates/emptyPage')
@section("title", "Opdracht")
@section("content")
    <h3 class="center">Naam</h3>
        <div class="flex">
            <h3>{{$assignment->name}}</h3>
        </div>
    <h3 class="center">Afbeelding</h3>
        <div class="flex">
            <img src="{{$assignment->url}}">
        </div>
    <h3 class="center">Beschrijving</h3>
        <div class="flex">
            <h3>{{$assignment->description}}</h3>
        </div>
        <div class="flex marginbottom">
            <form action="/assignments/{{$assignment->id}}/edit" method="GET">
                <button type="submit" name="id" value="{{$assignment->id}}">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </form>
        </div>
        <div class="flex marginbottom">
            <form action="/assignments/{{$assignment->id}}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        </div>
        <div class="flex">
            <a href="{{route("assignments.index")}}">
                <div class="divButton">
                    <i class="fas fa-arrow-left"></i>
                </div>
            </a>
        </div>
