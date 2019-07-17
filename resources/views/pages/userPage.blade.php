@extends("templates/emptyPage")
@section("title", "Gebruikerspagina")
@section("content")
    <div class="container mb-5">
        <h3>Naam: {{ $user->name }}</h3>
        <h3>E-mail: {{ $user->email }}</h3>
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
    <div class="container">
        <form action="{{ route('home') }}" method="get">
            <button type="submit">
                <i class="fas fa-home"></i>
            </button>
        </form>
    </div>
@endsection
