@extends("templates/emptyPage")
@section("title", ucfirst(__('errors.internalError')))
@section("content")
    <h1 class="errorHeader text-center">500</h1>
    <div class="container mb-5">
        <section class="errorSection text-center">
            <h2>{{ __('errors.somethingWentWrong') }}</h2>
            <h2>{{ __('errors.requestCausedError') }}</h2>
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
