@extends('templates/emptyPage')
@section("title", "Opdracht $assignment->id")
@section("content")
    <h3 class="text-center">Naam: {{ $assignment->name }}</h3>
    <h3 class="text-center">Afbeelding:</h3>
        <div class="container mb-3">
            <img class="img-fluid" src="{{ $assignment->url }}">
        </div>
    <h3 class="text-center mb-3">Beschrijving: {{ $assignment->description }}</h3>
    @can('update', $assignment)
        <div class="container mb-3">
            <form action="/assignments/{{$assignment->id}}/edit" method="GET">
                <button type="submit" name="id" value="{{$assignment->id}}">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </form>
        </div>
    @endcan
    @can('delete', $assignment)
        <div class="container mb-3">
            <form action="/assignments/{{$assignment->id}}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        </div>
    @endcan
    <div class="container">
        <form action="{{ route("assignments.index" )}}" method="get">
            <button type="submit">
                <i class="fas fa-arrow-left"></i>
            </button>
        </form>
    </div>
@endsection
