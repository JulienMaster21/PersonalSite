@extends("templates/emptyPage")
@section("title", ucfirst(__('miscellaneous.reset')) . ' ' . ucfirst(__('miscellaneous.password')))
@section('content')
    <div class="container">
        <h1>{{ ucfirst(__('miscellaneous.reset')) }} {{ ucfirst(__('miscellaneous.password')) }}</h1>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <label for="email">{{ ucfirst(__('miscellaneous.email')) }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ ucfirst(__('miscellaneous.password')) }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-5">
                <label for="password-confirm">{{ ucfirst(__('miscellaneous.confirm')) }} {{ ucfirst(__('miscellaneous.password')) }}</label>
                    <input id="password-confirm" type="password" class="form-control"
                           name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn-lg">
                    {{ ucfirst(__('miscellaneous.reset')) }} {{ ucfirst(__('miscellaneous.password')) }}
                </button>
            </div>
        </form>
    </div>
@endsection
