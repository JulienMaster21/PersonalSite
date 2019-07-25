@extends("templates/emptyPage")
@section("title", ucfirst(__('miscellaneous.edit', ['object' => ucfirst(__('models.role.singular'))])))
@section("content")
    <p>* {{ ucfirst(__('miscellaneous.required')) }}</p>
    <div class="container">
        <form action="/roles/{{ $role->id }}" method="POST" id="form">
            @method("PATCH")
            @csrf
            <div class="form-group">
                <label for="name">*{{ ucfirst(__('miscellaneous.name')) }}:</label>
                <input id="name" required type="text" name="name" value="{{ $role->name }}"
                       placeholder="{{ __('messages.name') }}" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.name') }}" onblur="checkName();">
            </div>
            <h3 class="mb-3">{{ ucfirst(__('miscellaneous.permissions.plural')) }}:</h3>
            <div class="mb-5">
                @foreach($permissions as $permission)
                    <div class="form-check">
                        <input id="{{ $permission->name }}" name="{{ $permission->slug }}" class="form-check-input" type="checkbox"
                                data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                                data-content="{{ __('messages.checkbox') }}"
                                value="true"
                                @if($role->permissions()->get()->contains($permission->id))
                                    checked
                                @endif>
                        <label class="form-check-label" for="{{ $permission->name }}">{{ ucfirst(__('permissions.' . $permission->name)) }}</label>
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
    <script rel="javascript" src="{{ secure_asset("js/validateRole.js") }}"></script>
@endsection
