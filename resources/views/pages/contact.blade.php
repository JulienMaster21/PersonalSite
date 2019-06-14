@extends("templates/emptyPage")
@section("title", "contact")
@section("content")
    <h1>Contact</h1>
    <h3 class="mb-5">Email: julienmaster21@gmail.com</h3>
    <form class="mb-3" action="{{ url()->previous() }}" method="get">
        <button type="submit">
            <i class="fas fa-arrow-left"></i>
        </button>
    </form>
    <form action="{{ route("home") }}" method="get">
        <button type="submit">
            <i class="fas fa-home"></i>
        </button>
    </form>
@endsection
