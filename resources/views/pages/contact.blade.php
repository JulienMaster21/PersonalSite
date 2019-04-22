@extends("templates/emptyPage")
@section("title", "contact")
@section("content")
    <h1 class="center">Contact</h1>
    <h3 class="center">Email: julienmaster21@gmail.com</h3>
    <a class="notDecorated" href="{{ url()->previous() }}">
        <div class="errorDivButton">Ga terug</div>
    </a>
    <a class="notDecorated" href="{{ route("home") }}">
        <div class="errorDivButton">Home</div>
    </a>
@endsection
