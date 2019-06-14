@extends("templates/emptyPage")
@section("title", "Toegang geweigerd")
@section("content")
    <h1 class="errorHeader text-center">403</h1>
    <div class="container mb-5">
        <section class="errorSection text-center">
            <h2>Je hebt niet voldoende rechten om deze actie uit te voeren.</h2>
            <h2>Als dit niet klopt, dan zullen we dit zo snel mogelijk oplossen.</h2>
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
