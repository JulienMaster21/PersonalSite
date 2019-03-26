@extends('templates/emptyPage')
@section("title", "Opdracht")
@section("content")
    <h3 class="center">Naam</h3>
        <div class="flex">
            <h3>{{$assignment->project_name}}</h3>
        </div>
    <h3 class="center">Afbeelding</h3>
        <div class="flex">
            <img src="{{$assignment->image_url}}">
        </div>
    <h3 class="center">Beschrijving</h3>
        <div class="flex">
            <h3>{{$assignment->description}}</h3>
        </div>
        <div class="flex">
            <a href="{{route("assignments.index")}}">
                <div class="divButton">
                    <i class="fas fa-home"></i>
                </div>
            </a>
        </div>
