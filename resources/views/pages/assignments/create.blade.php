@extends('templates/BasePage')
@section("title", "Maak Opdracht")
@section("content")
    <form action="/assignments" method="POST">
        @csrf
        <h3 class="center">Naam</h3>
        <div class="flex marginbottom">
            <input required name="name" placeholder="Naam">
        </div>
        <h3 class="center">url</h3>
        <div class="flex marginbottom">
            <input required name="url" placeholder="Url">
        </div>
        <h3 class="center">Beschrijving</h3>
        <div class="flex marginbottom">
            <input required name="description" placeholder="Beschrijving">
        </div>
        <div class="flex">
            <button type="submit">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </form>
@endsection
