@extends("templates/emptyPage")
@section("title", ucfirst(__('errors.sessionExpired')))
@section("content")
    <h1 class="errorHeader text-center">419</h1>
    <div class="container mb-5">
        <section class="errorSection text-center">
            <h2>{{ __('errors.yourSessionExpired') }}</h2>
            <h2>{{ __('errors.advice') }}</h2>
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
@endsection
