@extends("templates/emptyPage")
@section("title", ucfirst(__('miscellaneous.userpage')))
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
    <div class="container">
        <form action="{{ route('home') }}" method="get">
            <button type="submit">
                <i class="fas fa-home"></i>
            </button>
        </form>
    </div>
@endsection
