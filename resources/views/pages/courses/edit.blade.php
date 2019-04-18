@extends("templates/emptyPage")
@section("title", "Pas Cursus aan")
@section("content")
    <form action="/courses/{{ $course->id }}" method="POST">
        @method("PATCH")
        @csrf
        <h3 class="center">Cursus</h3>
            <div class="flex marginbottom">
                <input required type="text" name="name" value="{{ $course->name }}">
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
        <a href="{{route("tests.index")}}">
            <div class="divButton">
                <i class="fas fa-arrow-left"></i>
            </div>
        </a>
    </div>
@endsection
