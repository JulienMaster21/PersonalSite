@extends('templates/emptyPage')
@section("title", ucfirst(__('models.blok.singular')) . ' ' . $blok->id)
@section("content")
    <h3 class="text-center">{{ ucfirst(__('models.blok.singular')) }}: {{$blok->id}}</h3>
    <h3 class="text-center">{{ ucfirst(__('models.course.plural')) }}:</h3>
    <div class="container text-center mb-3">
        @if ($blok->courses->isEmpty())
                <h3>{{ ucfirst(__('miscellaneous.none')) }}</h3>
        @else
            @foreach ($courses->where("blok_id", "=", $blok->id) as $course)
                        <h3>
                            <a class="link" href="/courses/{{ $course->id }}">{{ $course->name }}</a>
                        </h3>
            @endforeach
        @endif
    </div>
    <h3 class="text-center">{{ ucfirst(__('miscellaneous.madeOn')) }}: {{ $blok->created_at }}</h3>
    <h3 class="text-center mb-5">{{ ucfirst(__('miscellaneous.lastUpdatedOn')) }}: {{ $blok->updated_at }}</h3>
    @can('create', $blok)
        <div class="container mb-3">
            <form action="/bloks" method="post">
                @csrf
                <button type="submit" name="id" value="{{ $bloks->last()->id + 1 }}">
                    <i class="fas fa-plus"></i>
                </button>
            </form>
        </div>
    @endcan
    @can('delete', $blok)
        @if (count($bloks) == 1)

        @else
            <div class="container mb-3">
                <form action="/bloks/{{$blok->id}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        @endif
    @endcan
    <div class="container">
        <form action="{{ route("tests.index") }}" method="get">
            <button type="submit">
                <i class="fas fa-arrow-left"></i>
            </button>
        </form>
    </div>
@endsection
