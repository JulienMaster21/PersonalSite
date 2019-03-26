@extends('templates/emptyPage')
@section("title", "Pas opdracht aan")
@section("content")
    <form action="/assignments/{{$assignment->id}}" method="POST">
        @method("PATCH")
        @csrf
        <h3 class="center">Naam</h3>
        <div class="flex marginbottom">
            @if (old("name"))
                <input required name="name" value="{{old("name")}}">
            @else
                <input required name="name" value="{{$assignment->name}}">
            @endif
        </div>
        <h3 class="center">url</h3>
        <div class="flex marginbottom">
            @if (old("url"))
                <input required name="url" value="{{old("url")}}">
            @else
                <input required name="url" value="{{$assignment->url}}">
            @endif
        </div>
        <h3 class="center">Beschrijving</h3>
        <div class="flex marginbottom">
            @if (old("description"))
                <input required name="description" value="{{old("description")}}">
            @else
                <input required name="description" value="{{$assignment->description}}">
            @endif
        </div>
        <div class="flex">
            <button type="submit" name="id" value="{{$assignment->id}}">
                <i class="fas fa-pencil-alt"></i>
            </button>
        </div>
    </form>
@endsection
