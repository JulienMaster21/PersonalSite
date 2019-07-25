@extends("templates/emptyPage")
@section("title", ucfirst(__('miscellaneous.login')))
@section("content")
    <h1 class="mb-5">{{ ucfirst(__('miscellaneous.portfolio')) }}</h1>
    <h3 class="mb-3">{{ ucfirst(__('miscellaneous.login')) }}</h3>

    <div class="container">
        <form id="form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">{{ ucfirst(__('miscellaneous.email')) }}:</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                       autofocus placeholder="{{ __('messages.email') }}"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.email') }}"
                       onblur="checkEmail();">
            </div>

            <div class="form-group">
                <label for="password">{{ ucfirst(__('miscellaneous.password')) }}:</label>
                <input id="password" type="password" class="form-control" name="password" required
                       placeholder="{{ __('messages.password') }}" data-trigger="focus"
                       data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.password') }}" onblur="checkPassword();">
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ ucfirst(__('miscellaneous.rememberMe')) }}
                    </label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn-lg">
                    {{ ucfirst(__('miscellaneous.login')) }}
                </button>
            </div>
        </form>
        <div>
            <a class="link" href="{{ route('register') }}">
                {{ ucfirst(__('miscellaneous.noAccount')) }}?
            </a>
        </div>
        <div>
            <a class="link" href="{{ route('home') }}">
                {{ ucfirst(__('miscellaneous.loginAsGuest')) }}?
            </a>
        </div>
    </div>
    <script rel="javascript" src="{{ secure_asset("js/validateLogin.js") }}"></script>
@endsection
