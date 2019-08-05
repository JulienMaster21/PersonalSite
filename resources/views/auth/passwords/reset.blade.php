@extends("templates/emptyPage")
@section("title", ucfirst(__('miscellaneous.reset')) . ' ' . ucfirst(__('miscellaneous.password')))
@section('content')
    <div class="container">
        <h1>{{ ucfirst(__('miscellaneous.reset')) }} {{ ucfirst(__('miscellaneous.password')) }}</h1>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">

            <div class="form-group">
                <label for="password">{{ ucfirst(__('miscellaneous.password')) }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password"
                       onblur="checkPassword()" placeholder="{{ __('messages.password') }}"
                       data-trigger="focus" data-container="body" data-toggle="popover"
                       data-placement="top" data-content="{{ __('messages.password') }}">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-5">
                <label for="confirmPassword">{{ ucfirst(__('miscellaneous.confirm')) }} {{ ucfirst(__('miscellaneous.password')) }}</label>
                    <input id="confirmPassword" type="password" class="form-control"
                           name="password_confirmation" required autocomplete="new-password"
                           onblur="checkConfirmPassword()" placeholder="{{ __('messages.confirmPassword') }}"
                           data-trigger="focus" data-container="body" data-toggle="popover"
                           data-placement="top" data-content="{{ __('messages.confirmPassword') }}">
            </div>

            <div class="form-group">
                <button type="submit" class="btn-lg">
                    {{ ucfirst(__('miscellaneous.reset')) }} {{ ucfirst(__('miscellaneous.password')) }}
                </button>
            </div>
        </form>
    </div>
@endsection
