@extends("templates/emptyPage")
@section("title", ucfirst(__('models.role.plural')))
@section("content")
    <h1 class="mb-3">{{ ucfirst(__('models.role.plural')) }}</h1>
    <table class="text-center monitor mb-5 mx-auto">
        <thead>
            <tr>
                <th>{{ ucfirst(__('miscellaneous.name')) }}</th>
                <th>{{ ucfirst(__('miscellaneous.youHave')) }}?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>
                        <a class="link" href="roles/{{ $role->id }}">{{ $role->name }}</a>
                    </td>
                    <td>
                        @if($user->roles()->get()->contains('name', '=', $role->name))
                            <i class="fas fa-check"></i>
                        @else
                            <i class="fas fa-times"></i>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @can('create', $role)
        <form class="mb-3" action="{{ route('roles.create') }}" method="get">
            <button type="submit">
                <i class="fas fa-plus"></i>
            </button>
        </form>
    @endcan
    <form class="mb-3" action="{{ url()->previous() }}" method="get">
        <button type="submit">
            <i class="fas fa-arrow-left"></i>
        </button>
    </form>
    <form action="{{ route("home") }}" method="get">
        <button type="submit">
            <i class="fas fa-home"></i>
        </button>
    </form>
@endsection
