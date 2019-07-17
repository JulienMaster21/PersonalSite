@extends("templates/emptyPage")
@section("title", "Gebruikers")
@section("content")
    <h1 class="mb-3">Gebruikers</h1>
    <table class="text-center monitor mb-5 mx-auto">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        <a class="link" href="users/{{ $user->id }}">{{ $user->name }}</a>
                    </td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
