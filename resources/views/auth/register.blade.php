@extends("templates/emptyPage")
@section("title", ucfirst(__('miscellaneous.register.plural')))
@section("content")
    <div class="container">
        <h3 class="mb-3">{{ ucfirst(__('miscellaneous.register.singular')) }}</h3>

        <form id="form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">{{ ucfirst(__('miscellaneous.name')) }}:</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                       autofocus placeholder="{{ __('messages.name') }}"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.name') }}" onblur="checkName();">
            </div>

            <div class="form-group">
                <label for="email">{{ ucfirst(__('miscellaneous.email')) }}:</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                       placeholder="{{ __('messages.email') }}"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.email') }}"
                       onblur="checkEmail();">
            </div>

            <div class="form-group">
                <label for="password">{{ ucfirst(__('miscellaneous.password')) }}:</label>
                <input id="password" type="password" class="form-control" name="password" required
                       placeholder="{{ __('messages.password') }}"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.password') }}" onblur="checkPassword();">
            </div>

            <div class="form-group">
                <label for="confirmPassword">{{ ucfirst(__('miscellaneous.confirmPassword')) }}:</label>
                <input id="confirmPassword" type="password" class="form-control" name="password_confirmation" required
                       placeholder="{{ __('messages.confirmPassword') }}"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.confirmPassword') }}" onblur="checkConfirmPassword();">
            </div>

            <div class="form-group">
                <button type="submit" class="btn-lg">
                    {{ ucfirst(__('miscellaneous.register.singular')) }}
                </button>
            </div>
        </form>

        <form action="{{ route('login') }}" method="get">
            <button type="submit" class="btn-lg">
                <i class="fas fa-arrow-left"></i>
            </button>
        </form>
    </div>
@endsection
