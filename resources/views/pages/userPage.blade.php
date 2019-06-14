@extends("templates/emptyPage")
@section("title", "Gebruikerspagina")
@section("content")
    <div class="container mb-5">
        <h3>Naam: {{ $user->name }}</h3>
        <h3>E-mail: {{ $user->email }}</h3>
        <h3>E-mail geverifieerd sinds: {{ $user->email_verified_at }}</h3>
        <h3>Authenticatielevel: {{ $user->roles()->first()->name }}</h3>
        <h3>Lid sinds: {{ $user->created_at }}</h3>
        <h3>Laatst geupdate sinds: {{ $user->updated_at }}</h3>
    </div>
    <div class="container">
        <form action="{{ route('home') }}" method="get">
            <button type="submit">
                <i class="fas fa-home"></i>
            </button>
        </form>
    </div>
@endsection
