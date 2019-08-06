@extends("templates/emptyPage")
@section("title", __('termsAndConditions.title'))
@section("content")
    <h1>{{ __('termsAndConditions.title') }}</h1>

    <p class="text-left">{{ __('termsAndConditions.lastUpdated') }}</p>

    <p class="text-left">{{ __('termsAndConditions.p1') }}</p>

    <p class="text-left">{{ __('termsAndConditions.p2') }}</p>

    <p class="text-left">{{ __('termsAndConditions.p3') }}<a class="link" href="https://www.termsfeed.com/">{{ __('termsAndConditions.p3link') }}</a>.</p>

    <h2>{{ __('termsAndConditions.h1') }}</h2>

    <p class="text-left">{{ __('termsAndConditions.p4') }}</p>

    <p class="text-left">{{ __('termsAndConditions.p5') }}</p>

    <p class="text-left">{{ __('termsAndConditions.p6') }}</p>

    <h2>{{ __('termsAndConditions.h2') }}</h2>

    <p class="text-left">{{ __('termsAndConditions.p7') }}</p>

    <p class="text-left">{{ __('termsAndConditions.p8') }}</p>

    <p class="text-left">{{ __('termsAndConditions.p9') }}</p>

    <h2>{{ __('termsAndConditions.h3') }}</h2>

    <p class="text-left">{{ __('termsAndConditions.p10') }}</p>

    <p class="text-left">{{ __('termsAndConditions.p11') }}</p>

    <p class="text-left">{{ __('termsAndConditions.p12') }}</p>

    <p class="text-left">{{ __('termsAndConditions.p13') }}</p>

    <h2>{{ __('termsAndConditions.h4') }}</h2>

    <p class="text-left">{{ __('termsAndConditions.p14') }}</p>

    <p class="text-left">{{ __('termsAndConditions.p15') }}</p>

    <h2>{{ __('termsAndConditions.h5') }}</h2>

    <p class="text-left">{{ __('termsAndConditions.p16') }}</p>

    <p class="text-left">{{ __('termsAndConditions.p17') }}</p>

    <h2>{{ __('termsAndConditions.h6') }}</h2>

    <p class="text-left mb-5">{{ __('termsAndConditions.p18') }}</p>

    <form class="mb-3" action="{{ url()->previous() }}" method="get">
        <button type="submit">
            <i class="fas fa-arrow-left"></i>
        </button>
    </form>
    <form class="mb-3" action="{{ route("home") }}" method="get">
        <button type="submit">
            <i class="fas fa-home"></i>
        </button>
    </form>
@endsection
