@extends('templates/basePage')
@section("title", "Opdrachten")
@section("content")
    <div class="container-fluid d-flex justify-content-center mb-3">
        <form action="{{route("assignments.create")}}" method="get">
            <button class="btn-lg" type="submit">
                <i class="fas fa-plus"></i>
            </button>
        </form>
    </div>
    @foreach ($assignments as $assignment)
        <div class="container text-center">
            <h3>{{$assignment->name}}</h3>
        </div>
        <div class="container d-flex justify-content-center mb-3">
            <a href="/assignments/{{$assignment->id}}">
                <img class="img-fluid" src="{{$assignment->url}}">
            </a>
        </div>
        <div class="container text-center mb-5">
            <h3>{{$assignment->description}}</h3>
        </div>
    @endforeach
@endsection
