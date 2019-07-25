@extends('templates/basePage')
@section("title", ucfirst(__('models.assignment.plural')))
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
    @foreach ($assignments as $assign)
        <div class="container text-center">
            @can('view', $assignment)
                <a class="link" href="/assignments/{{ $assign->id }}">
                    <h3>{{ $assign->name }}</h3>
                </a>
            @else
                <h3>{{ $assign->name }}</h3>
            @endcan
        </div>
        <div class="container d-flex justify-content-center mb-3">
            @can('view', $assignment)
                <a href="/assignments/{{ $assign->id }}">
                    <img class="img-fluid assignmentImage" src="{{ $assign->url }}">
                </a>
            @else
                <img class="img-fluid assignmentImage" src="{{ $assign->url }}">
            @endcan
        </div>
        <div class="container text-center mb-5">
            <h3>{{ $assign->description }}</h3>
        </div>
    @endforeach
@endsection
