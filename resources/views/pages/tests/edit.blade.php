@extends("templates/emptyPage")
@section("title", "Pas Toets aan")
@section("content")
    <form action="/tests/{{$test->id}}" method="POST">
        @method("PATCH")
        @csrf
        <h3 class="center">Toets</h3>
            <div class="flex marginbottom">
                <input required type="text" name="name" value="{{$test->name}}">
            </div>
        <h3 class="center">Behaald?</h3>
            <div class="flex marginbottom">
                <label>Ja<label>
                    <input required type="radio" name="completed" value="true" {{$test->completed ? "checked" : NULL}}>
                <label>Nee<label>
                    <input required type="radio" name="completed" value="false" {{!$test->completed ? "checked" : NULL}}>
            </div>
        <h3 class="center">Cijfer</h3>
            <div class="flex marginbottom">
                <input required type="text" name="grade" value="{{$test->grade}}">
            </div>
        <h3 class="center">EC's</h3>
            <div class="flex marginbottom">
                <input required type="text" name="EC" value="{{$test->EC}}">
            </div>
        <h3 class="center">Cursus</h3>
            <div class="flex marginbottom">
                <select name="course_id">
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                    <option value="">Geen</option>
                </select>
            </div>
        <div class="flex">
            <button type="submit">
                <i class="fas fa-check"></i>
            </button>
        </div>
    </form>
    <div class="flex">
        <a class="notDecorated" href="{{ url()->previous() }}">
            <div class="divButton">
                <i class="fas fa-ban"></i>
            </div>
        </a>
    </div>
@endsection
