@extends("templates/emptyPage")
@section("title", ucfirst(__('miscellaneous.edit', ['object' => ucfirst(__('models.user.singular'))])))
@section("content")
    <p>* {{ ucfirst(__('miscellaneous.required')) }}</p>
    <div class="container">
        <form action="/users/{{ $user->id }}" method="POST" id="form">
            @method("PATCH")
            @csrf

            <div class="form-group">
                <label for="name">*{{ ucfirst(__('miscellaneous.name')) }}:</label>
                <input id="name" required type="text" name="name" value="{{ $user->name }}"
                       placeholder="{{ __('messages.name') }}" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.name') }}" onblur="checkName();">
            </div>

            <div class="form-group">
                <label for="email">*{{ ucfirst(__('miscellaneous.email')) }}:</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required
                       placeholder="{{ __('messages.email') }}"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.email') }}"
                       onblur="checkEmail();">
            </div>

            <h3 class="mb-3">{{ ucfirst(__('models.role.plural')) }}:</h3>
            <div class="mb-5">
                @foreach($roles as $role)
                    <div class="form-check">
                        <input id="{{ $role->name }}" name="{{ $role->name }}" class="form-check-input" type="checkbox"
                                data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                                data-content="{{ __('messages.checkbox') }}"
                                value="true"
                                @if($user->roles()->get()->contains($role->id))
                                    checked
                                @endif>
                        <label class="form-check-label" for="{{ $role->name }}">{{ $role->name }}</label>
                    </div>
                @endforeach
            </div>
            <div class="container mb-3">
                <button type="submit">
                    <i class="fas fa-check"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="container">
        <form action="{{ url()->previous() }}" method="get">
            <button type="submit">
                <i class="fas fa-ban"></i>
            </button>
        </form>
    </div>
    <script rel="javascript" src="{{ secure_asset("js/validateUser.js") }}"></script>
@endsection
