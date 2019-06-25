@extends('templates/basePage')
@section("title", "Opdrachten")
@section("content")
    @can('create', App\Assignment::class)
        <div class="container-fluid d-flex justify-content-center mb-3">
            <form action="{{ route("assignments.create") }}" method="get">
                <button class="btn-lg" type="submit">
                    <i class="fas fa-plus"></i>
                </button>
            </form>
        </div>
    @endcan
    @foreach ($assignments as $assignment)
        <div class="container text-center">
            @can('view', App\Assignment::class)
                <a class="link" href="/assignments/{{ $assignment->id }}">
                    <h3>{{ $assignment->name }}</h3>
                </a>
            @else
                <h3>{{ $assignment->name }}</h3>
            @endcan
        </div>
        <div class="container d-flex justify-content-center mb-3">
            @can('view', App\Assignment::class)
                <a href="/assignments/{{ $assignment->id }}">
                    <img class="img-fluid assignmentImage" src="{{ $assignment->url }}">
                </a>
            @else
                <img class="img-fluid assignmentImage" src="{{ $assignment->url }}">
            @endcan
        </div>
        <div class="container text-center mb-5">
            <h3>{{ $assignment->description }}</h3>
        </div>
    @endforeach
@endsection
