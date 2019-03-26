@extends('templates/BasePage')
@section("title", "Maak Opdracht")
@section("content")
    <form action="/assignments" method="POST">
        @csrf
        <h3 class="center">Naam</h3>
        <div class="flex marginbottom">
            @if (old("name") !== NULL)
                <input required name="name" value="{{old("name")}}">
            @else
                <input required name="name" placeholder="Naam">
            @endif
        </div>
        <h3 class="center">url</h3>
        <div class="flex marginbottom">
            @if (old("url") !== NULL)
                <input required name="url" value="{{old("url")}}">
            @else
                <input required name="url" placeholder="URL">
            @endif
        </div>
        <h3 class="center">Beschrijving</h3>
        <div class="flex marginbottom">
            @if (old("description") !== NULL)
                <input required name="description" value="{{old("description")}}">
            @else
                <input required name="description" placeholder="Beschrijving">
            @endif
        </div>
        <div class="flex">
            <button type="submit">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </form>
@endsection
