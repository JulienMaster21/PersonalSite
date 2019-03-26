@extends('templates/BasePage')
@section("title", "Opdrachten")
@section("content")
    <div class="flex">
        <a href="{{route("assignments.create")}}">
            <div class="divButton">
                <i class="fas fa-plus"></i>
            </div>
        </a>
    </div>
    @foreach ($assignments as $assignment)
        <div class="flex">
            <h3>{{$assignment->name}}</h3>
        </div>
        <div class="flex">
            <a href="/assignments/{{$assignment->id}}">
                <img src="{{$assignment->url}}">
            </a>
        </div>
        <div class="flex">
            <h3>{{$assignment->description}}</h3>
        </div>
    @endforeach
@endsection
