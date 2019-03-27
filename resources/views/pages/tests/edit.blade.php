@extends("templates/emptyPage")
@section("title", "Pas opdracht aan")
@section("content")
    <form action="/tests/{{$test->id}}" method="POST">
        @method("PATCH")
        @csrf
        <h3 class="center">Toetsonderdeel</h3>
            <div class="flex marginbottom">
                <input required type="text" name="subject" value="{{$test->subject}}">
            </div>
        <h3 class="center">Cursus</h3>
            <div class="flex marginbottom">
                <input required type="text" name="cursus" value="{{$test->cursus}}">
            </div>
        <h3 class="center">Blok</h3>
            <div class="flex marginbottom">
                <input required type="number" name="blok" value="{{$test->blok}}">
            </div>
        <h3 class="center">Behaald?</h3>
            <div class="flex marginbottom">
                <label>Ja<label>
                    <input required type="radio" name="completed" value=true {{$test->completed ? "checked" : NULL}}>
                <label>Nee<label>
                    <input required type="radio" name="completed" value=false {{!$test->completed ? "checked" : NULL}}>
            </div>
        <h3 class="center">Cijfer</h3>
            <div class="flex marginbottom">
                <input required type="text" name="grade" value="{{$test->grade}}">
            </div>
        <h3 class="center">EC's</h3>
            <div class="flex marginbottom">
                <input required type="text" name="EC" value="{{$test->EC}}">
            </div>
        <div class="flex">
            <button type="submit">
                <i class="fas fa-pencil-alt"></i>
            </button>
        </div>
    </form>
    <div class="flex">
        <a href="{{route("tests.show", ["id" => $test->id])}}">
            <div class="divButton">
                <i class="fas fa-arrow-left"></i>
            </div>
        </a>
    </div>
@endsection
