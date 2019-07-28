@extends("templates/emptyPage")
@section("title", ucfirst(__('miscellaneous.edit', ['object' => ucfirst(__('models.role.singular'))])))
@section("content")
    <p>* {{ ucfirst(__('miscellaneous.required')) }}</p>
    <form action="/roles/{{ $role->id }}" method="POST" id="form">
        @method("PATCH")
        @csrf
        <div class="container form-group mb-3">
            <label for="name">*{{ ucfirst(__('miscellaneous.name')) }}:</label>
            <input id="name" required type="text" name="name" value="{{ $role->name }}"
                   placeholder="{{ __('messages.name') }}" class="form-control"
                   data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                   data-content="{{ __('messages.name') }}" onblur="checkName();">
        </div>

        <h3 class="mb-3">{{ ucfirst(__('miscellaneous.permissions.plural')) }}:</h3>
        <table class="monitor text-center mx-auto mb-5">
            <thead>
            <tr>
                <th></th>
                <th>{{ ucfirst(__('miscellaneous.view')) }}</th>
                <th>{{ ucfirst(__('miscellaneous.create.plural')) }}</th>
                <th>{{ ucfirst(__('miscellaneous.update')) }}</th>
                <th>{{ ucfirst(__('miscellaneous.delete')) }}</th>
            </tr>
            </thead>
            <tbody>
                @foreach($models as $key=>$model)
                    <tr>
                        <td>{{ ucfirst($model['plural']) }}</td>
                        <td>
                            <input name="view_{{ $model['singular'] }}" type="checkbox"
                                   data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                                   data-content="{{ __('messages.checkbox') }}"
                                   value="true"
                                    @foreach($role->permissions()->get() as $permission)
                                        @if($permission->slug === 'view_' . $model['singular'])
                                            checked
                                        @endif
                                    @endforeach>
                        </td>
                        <td>
                            <input name="create_{{ $model['singular'] }}" type="checkbox"
                                   data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                                   data-content="{{ __('messages.checkbox') }}"
                                   value="true"
                                    @foreach($role->permissions()->get() as $permission)
                                        @if($permission->slug === 'create_' . $model['singular'])
                                            checked
                                        @endif
                                    @endforeach>
                        </td>
                        <td>
                            <input name="update_{{ $model['singular'] }}" type="checkbox"
                                   data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                                   data-content="{{ __('messages.checkbox') }}"
                                   value="true"
                                    @foreach($role->permissions()->get() as $permission)
                                        @if($permission->slug === 'update_' . $model['singular'])
                                            checked
                                        @endif
                                    @endforeach>
                        </td>
                        <td>
                            <input name="delete_{{ $model['singular'] }}" type="checkbox"
                                   data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                                   data-content="{{ __('messages.checkbox') }}"
                                   value="true"
                                    @foreach($role->permissions()->get() as $permission)
                                        @if($permission->slug === 'delete_' . $model['singular'])
                                            checked
                                        @endif
                                    @endforeach>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="container mb-3">
            <button type="submit">
                <i class="fas fa-check"></i>
            </button>
        </div>
    </form>

    <div class="container">
        <form action="{{ url()->previous() }}" method="get">
            <button type="submit">
                <i class="fas fa-ban"></i>
            </button>
        </form>
    </div>
    <script rel="javascript" src="{{ secure_asset("js/validateRole.js") }}"></script>
@endsection
