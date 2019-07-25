@extends("templates/emptyPage")
@section("title", ucfirst(__('errors.pageNotFound')))
@section("content")
    <h1 class="errorHeader center">404</h1>
    <div class="container mb-5">
        <section class="errorSection center">
            <h2>{{ __('errors.weCouldntFindThePage') }}</h2>
            <h2>{{ __('errors.pageMoved') }}</h2>
            <h2>{{ __('errors.advice') }}</h2>
            <h2>{{ __('errors.inform') }}</h2>
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
