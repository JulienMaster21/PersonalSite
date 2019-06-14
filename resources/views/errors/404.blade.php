@extends("templates/emptyPage")
@section("title", "Pagina niet gevonden")
@section("content")
    <h1 class="errorHeader center">404</h1>
    <div class="container mb-5">
        <section class="errorSection center">
            <h2>We hebben de pagina die je zocht niet kunnen vinden.</h2>
            <h2>De pagina is mogelijk verplaatst of bestaat niet.</h2>
            <h2>Ons advies is om terug naar de laatste pagina of
                de home pagina te gaan.
            </h2>
            <h2>Informeer ons alsjeblieft ook over deze situatie</h2>
        </section>
    </div>
    <form class="mb-3" action="{{ url()->previous() }}" method="get">
        <button class="btn-lg" type="submit">
            <i class="fas fa-arrow-left"></i>
        </button>
    </form>
    <form class="mb-3" action="{{ route("home") }}" method="get">
        <button class="btn-lg" type="submit">
            <i class="fas fa-home"></i>
        </button>
    </form>
    <form class="mb-3" action="{{ route("contact") }}" method="get">
        <button class="btn-lg" type="submit">
            <i class="fas fa-phone"></i>
        </button>
    </form>
@endsection
