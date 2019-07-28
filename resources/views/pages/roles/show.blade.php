@extends("templates/emptyPage")
@section("title", ucfirst(__('models.role.singular')) . ' ' . $role->id)
@section("content")
    <div class="container mb-3">
        <h3>{{ ucfirst(__('miscellaneous.name')) }}: {{ $role->name }}</h3>
        <h3>{{ ucfirst(__('miscellaneous.permissions.plural')) }}:</h3>
    </div>
    <table class="monitor text-center mx-auto mb-3">
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
                        @if($role->permissions()->get()->contains('slug', '=', 'view_' . $key))
                            <i class="fas fa-check"></i>
                        @else
                            <i class="fas fa-times"></i>
                        @endif
                    </td>
                    <td>
                        @if($role->permissions()->get()->contains('slug', '=', 'create_' . $key))
                            <i class="fas fa-check"></i>
                        @else
                            <i class="fas fa-times"></i>
                        @endif
                    </td>
                    <td>
                        @if($role->permissions()->get()->contains('slug', '=', 'update_' . $key))
                            <i class="fas fa-check"></i>
                        @else
                            <i class="fas fa-times"></i>
                        @endif
                    </td>
                    <td>
                        @if($role->permissions()->get()->contains('slug', '=', 'delete_' . $key))
                            <i class="fas fa-check"></i>
                        @else
                            <i class="fas fa-times"></i>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h3>{{ ucfirst(__('miscellaneous.madeOn')) }}: {{ $role->created_at ? $role->created_at : ucfirst(__('miscellaneous.not')) }}</h3>
    <h3 class="mb-5">{{ ucfirst(__('miscellaneous.lastUpdatedOn')) }}: {{ $role->updated_at ? $role->updated_at : ucfirst(__('miscellaneous.not')) }}</h3>
    @can('update', $role)
        <div class="container mb-3">
            <form action="/roles/{{ $role->id }}/edit" method="GET">
                <button type="submit">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </form>
        </div>
    @endcan
    @can('delete', $role)
        <div class="container mb-3">
            <form action="/roles/{{ $role->id }}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        </div>
    @endcan
    <div class="container">
        <form action="{{ route("roles.index") }}" method="get">
            <button type="submit">
                <i class="fas fa-arrow-left"></i>
            </button>
        </form>
    </div>
@endsection
