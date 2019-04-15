@extends('templates/BasePage')
@section("title", "Maak Opdracht")
@section("content")
    <form action="/tests" method="POST">
        @csrf
        <h3 class="center">Toetsonderdeel</h3>
            <div class="flex marginbottom">
                <input required type="text" name="subject" placeholder="Toetsonderdeel">
            </div>
        <h3 class="center">Cursus</h3>
            <div class="flex marginbottom">
                <input required type="text" name="cursus" placeholder="Cursus">
            </div>
        <h3 class="center">Blok</h3>
            <div class="flex marginbottom">
                <input required type="number" name="blok" placeholder="Blok">
            </div>
        <h3 class="center">Behaald?</h3>
            <div class="flex marginbottom">
                <label>Ja<label>
                    <input required type="radio" name="completed" value="true">
                <label>Nee<label>
                    <input required type="radio" name="completed" value="false">
            </div>
        <h3 class="center">Cijfer</h3>
            <div class="flex marginbottom">
                <input required type="text" name="grade" placeholder="Cijfer">
            </div>
        <h3 class="center">EC's</h3>
            <div class="flex marginbottom">
                <input required type="text" name="EC" placeholder="EC's">
            </div>
        <div class="flex">
            <button type="submit">
                <i class="fas fa-pencil-alt"></i>
            </button>
        </div>
    </form>
    <div class="flex">
        <a href="{{route("tests.index")}}">
            <div class="divButton">
                <i class="fas fa-arrow-left"></i>
            </div>
        </a>
    </div>
@endsection
