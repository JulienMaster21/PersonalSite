@extends('templates/emptyPage')
@section("title", "Pas opdracht aan")
@section("content")
    <form action="/assignments/{{$assignment->id}}" method="POST">
        @method("PATCH")
        @csrf
        <h3 class="center">Naam</h3>
        <div class="flex marginbottom">
            <input required name="name" value="{{$assignment->project_name}}">
        </div>
        <h3 class="center">url</h3>
        <div class="flex marginbottom">
            <input required name="url" value="{{$assignment->image_url}}">
        </div>
        <h3 class="center">Beschrijving</h3>
        <div class="flex marginbottom">
            <input required name="description" value="{{$assignment->description}}">
        </div>
        <div class="flex">
            <button type="submit" name="id" value="{{$assignment->id}}">
                <i class="fas fa-pencil-alt"></i>
            </button>
        </div>
    </form>
@endsection
