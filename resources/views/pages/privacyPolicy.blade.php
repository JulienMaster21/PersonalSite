@extends("templates/emptyPage")
@section("title", __('privacyPolicy.title'))
@section("content")
    <h1>{{ __('privacyPolicy.title') }}</h1>

    <p class="text-left">{{ __('privacyPolicy.effectiveDate') }}</p>


    <p class="text-left">{{ __('privacyPolicy.p1') }}</p>

    <p class="text-left">{{ __('privacyPolicy.p2') }}
        <a class="link" href="https://www.freeprivacypolicy.com/free-privacy-policy-generator.php">
            {{ __('privacyPolicy.p2link') }}</a>.
    </p>

    <p class="text-left">{{ __('privacyPolicy.p3') }}</p>

    <h2>{{ __('privacyPolicy.h1') }}</h2>

    <p class="text-left">{{ __('privacyPolicy.p4') }}</p>

    <h3>{{ __('privacyPolicy.h2') }}</h3>

    <h4>{{ __('privacyPolicy.h3') }}</h4>

    <p class="text-left">{{ __('privacyPolicy.p5') }}:</p>

    <ul>
        <li class="text-left">{{ __('privacyPolicy.l1i1') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l1i2') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l1i3') }}</li>
    </ul>

    <h4>{{ __('privacyPolicy.h4') }}</h4>

    <p class="text-left">{{ __('privacyPolicy.p6') }}</p>

    <h4>{{ __('privacyPolicy.h5') }}</h4>
    <p class="text-left">{{ __('privacyPolicy.p7') }}</p>
    <p class="text-left">{{ __('privacyPolicy.p8') }}</p>
    <p class="text-left">{{ __('privacyPolicy.p9') }}</p>
    <p class="text-left">{{ __('privacyPolicy.p10') }}:</p>
    <ul>
        <li class="text-left">{{ __('privacyPolicy.l2i1') }}<strong></strong></li>
        <li class="text-left">{{ __('privacyPolicy.l2i2') }}<strong></strong></li>
        <li class="text-left">{{ __('privacyPolicy.l2i3') }}<strong></strong></li>
    </ul>

    <h2>{{ __('privacyPolicy.h6') }}</h2>

    <p class="text-left">{{ __('privacyPolicy.p11') }}:</p>
    <ul>
        <li class="text-left">{{ __('privacyPolicy.l3i1') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l3i2') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l3i3') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l3i4') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l3i5') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l3i6') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l3i7') }}</li>
    </ul>

    <h2>{{ __('privacyPolicy.h7') }}</h2>
    <p class="text-left">{{ __('privacyPolicy.p12') }}</p>
    <p class="text-left">{{ __('privacyPolicy.p13') }}</p>
    <p class="text-left">{{ __('privacyPolicy.p14') }}</p>
    <p class="text-left">{{ __('privacyPolicy.p15') }}</p>

    <h2>{{ __('privacyPolicy.h8') }}</h2>

    <h3>{{ __('privacyPolicy.h9') }}</h3>
    <p class="text-left">{{ __('privacyPolicy.p16') }}:</p>
    <ul>
        <li class="text-left">{{ __('privacyPolicy.l4i1') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l4i2') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l4i3') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l4i4') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l4i5') }}</li>
    </ul>

    <h2>{{ __('privacyPolicy.h10') }}</h2>
    <p class="text-left">{{ __('privacyPolicy.p17') }}</p>

    <h2>{{ __('privacyPolicy.h11') }}</h2>
    <p class="text-left">{{ __('privacyPolicy.p18') }}</p>
    <p class="text-left">{{ __('privacyPolicy.p19') }}</p>

    <h2>{{ __('privacyPolicy.h12') }}</h2>
    <p class="text-left">{{ __('privacyPolicy.p20') }}</p>
    <p class="text-left">{{ __('privacyPolicy.p21') }}</p>

    <h2>{{ __('privacyPolicy.h13') }}</h2>
    <p class="text-left">{{ __('privacyPolicy.p22') }}</p>
    <p class="text-left">{{ __('privacyPolicy.p23') }}</p>

    <h2>{{ __('privacyPolicy.h14') }}</h2>
    <p class="text-left">{{ __('privacyPolicy.p24') }}</p>
    <p class="text-left">{{ __('privacyPolicy.p25') }}</p>
    <p class="text-left">{{ __('privacyPolicy.p26') }}</p>

    <h2>{{ __('privacyPolicy.h15') }}</h2>
    <p class="text-left">{{ __('privacyPolicy.p27') }}:</p>
    <ul class="mb-5">
        <li class="text-left">{{ __('privacyPolicy.l5i1') }}</li>
        <li class="text-left">{{ __('privacyPolicy.l5i2') }}</li>

    </ul>

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
