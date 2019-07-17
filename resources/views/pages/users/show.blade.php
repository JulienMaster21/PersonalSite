@extends("templates/emptyPage")
@section("title", "Gebruiker $user->id")
@section("content")
    <div class="container mb-5">
        <h3>Naam: {{ $user->name }}</h3>
        <h3>Email: {{ $user->email }}</h3>
        <h3>E-mail geverifieerd sinds: {{ $user->email_verified_at ? $user->email_verified_at : 'Niet' }}</h3>
        <h3>Rollen: @foreach($user->roles()->get() as $role)
                @if ($role->id === $user->roles()->get()->last()->id)
                    {{ $role->name }}
                @else
                    {{ $role->name }},
                @endif
            @endforeach
        </h3>
        <h3>Lid sinds: {{ $user->created_at ? $user->created_at : 'Niet' }}</h3>
        <h3>Laatst geupdate sinds: {{ $user->updated_at ? $user->updated_at : 'Niet' }}</h3>
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
