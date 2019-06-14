@extends("templates/emptyPage")
@section("title", "Interne server fout")
@section("content")
    <h1 class="errorHeader text-center">500</h1>
    <div class="container mb-5">
        <section class="errorSection text-center">
            <h2>Er is iets fout gegaan bij onze servers.</h2>
            <h2>De request die gestuurd werd veroorzaakte een onverwachte fout.</h2>
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
