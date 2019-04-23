@extends("templates/emptyPage")
@section("title", "Pagina niet gevonden")
@section("content")
    <h1 class="errorHeader center">404</h1>
    <div class="container">
        <section class="errorSection center">
            <h2>We hebben de pagina die je zocht niet kunnen vinden.</h2>
            <h2>De pagina is mogelijk verplaatst of bestaat niet.</h2>
            <h2>Ons advies is om terug naar de laatste pagina of
                de home pagina te gaan.
            </h2>
            <h2>Informeer ons alsjeblieft ook over deze situatie</h2>
        </section>
    </div>
    <a class="notDecorated" href="{{ url()->previous() }}">
        <div class="errorDivButton">Ga Terug</div>
    </a>
    <a class="notDecorated" href="{{ route("home") }}">
        <div class="errorDivButton">Home</div>
    </a>
    <a class="notDecorated" href="{{ route("contact") }}">
        <div class="errorDivButton">Contact</div>
    </a>
@endsection
