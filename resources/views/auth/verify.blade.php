@extends("templates/emptyPage")
@section("title", ucfirst(__('miscellaneous.verify')))
@section("content")
    <h1 class="mb-5">{{ ucfirst(__('miscellaneous.verify')) }}</h1>

    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('miscellaneous.resent') }}
        </div>
    @endif

    <p>
        {{ __('miscellaneous.sent') }}
        {{ __('miscellaneous.didntReceive') }}, <a class="link" href="{{ route('verification.resend') }}">
        {{ __('miscellaneous.clickHere') }}</a>.
    </p>
@endsection
