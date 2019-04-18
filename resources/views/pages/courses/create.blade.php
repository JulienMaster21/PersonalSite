@extends('templates/emptyPage')
@section("title", "Maak Cursus")
@section("content")
    <form action="/courses" method="POST">
        @csrf
        <h3 class="center">Cursus</h3>
            <div class="flex marginbottom">
                <input required type="text" name="name" placeholder="Cursus">
            </div>
        <h3 class="center">Blok</h3>
            <div class="flex marginbottom">
                <select name="blok_id">
                    @foreach ($bloks as $blok)
                        <option value="{{ $blok->id }}">Blok {{ $blok->id }}</option>
                    @endforeach
                    <option value="">Geen</option>
                </select>
            </div>
        <div class="flex">
            <button type="submit">
                <i class="fas fa-pencil-alt"></i>
            </button>
        </div>
    </form>
    <div class="flex">
        <a href="{{ route("tests.index") }}">
            <div class="divButton">
                <i class="fas fa-arrow-left"></i>
            </div>
        </a>
    </div>
@endsection
