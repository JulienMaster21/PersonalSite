@extends("templates/emptyPage")
@section("title", ucfirst(__('miscellaneous.forgotPassword')))
@section('content')

    <div class="container">
        <h1>{{ ucfirst(__('miscellaneous.forgotPassword')) }}</h1>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group mb-5">
                <label for="email">{{ ucfirst(__('miscellaneous.email')) }}:</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn-lg">
                    {{ ucfirst(__('miscellaneous.sendLink')) }}
                </button>
            </div>
        </form>
    </div>
@endsection
