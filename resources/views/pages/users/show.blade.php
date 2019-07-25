@extends("templates/emptyPage")
@section("title", ucfirst(__('models.user.singular')) . ' ' . $user->id)
@section("content")
    <div class="container mb-5">
        <h3>{{ ucfirst(__('miscellaneous.name')) }}: {{ $user->name }}</h3>
        <h3>{{ ucfirst(__('miscellaneous.email')) }}: {{ $user->email }}</h3>
        <h3>{{ ucfirst(__('miscellaneous.emailVerifiedOn')) }}: {{ $user->email_verified_at ? $user->email_verified_at : ucfirst(__('miscellaneous.not')) }}</h3>
        <h3>{{ ucfirst(__('models.role.plural')) }}: @foreach($user->roles()->get() as $role)
                @if ($role->id === $user->roles()->get()->last()->id)
                    {{ $role->name }}
                @else
                    {{ $role->name }},
                @endif
            @endforeach
        </h3>
        <h3>{{ ucfirst(__('miscellaneous.memberSince')) }}: {{ $user->created_at ? $user->created_at : ucfirst(__('miscellaneous.not')) }}</h3>
        <h3>{{ ucfirst(__('miscellaneous.lastUpdatedOn')) }}: {{ $user->updated_at ? $user->updated_at : ucfirst(__('miscellaneous.not')) }}</h3>
    </div>
    @can('update', $user)
        <div class="container mb-3">
            <form action="/users/{{ $user->id }}/edit" method="GET">
                <button type="submit">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </form>
        </div>
    @endcan
    @can('delete', $user)
        <div class="container mb-3">
            <form action="/users/{{ $user->id }}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        </div>
    @endcan
    <div class="container">
        <form action="{{ route("users.index") }}" method="get">
            <button type="submit">
                <i class="fas fa-arrow-left"></i>
            </button>
        </form>
    </div>
@endsection
