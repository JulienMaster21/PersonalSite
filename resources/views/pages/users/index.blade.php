@extends("templates/emptyPage")
@section("title", ucfirst(__('models.user.plural')))
@section("content")
    <h1 class="mb-3">{{ ucfirst(__('models.user.plural')) }}</h1>
    <table class="text-center monitor mb-5 mx-auto">
        <thead>
            <tr>
                <th>{{ ucfirst(__('miscellaneous.name')) }}</th>
                <th>{{ ucfirst(__('miscellaneous.email')) }}</th>
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
