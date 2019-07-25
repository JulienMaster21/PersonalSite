@extends('templates/emptyPage')
@section("title", ucfirst(__('models.course.singular')) . ' ' . $course->id)
@section("content")
    <h3 class="text-center">{{ ucfirst(__('models.course.singular')) }}: {{ $course->name }}</h3>
    <h3 class="text-center">
        @if ($course->blok_id == NULL)
            {{ ucfirst(__('models.blok.singular')) }}: {{ ucfirst(__('miscellaneous.none')) }}
        @else
            <a class="link" href="/bloks/{{ $blok->id }}">{{ ucfirst(__('models.blok.singular')) }}: {{ $blok->id }}</a>
        @endif
    </h3>
    <h3 class="text-center">{{ ucfirst(__('models.test.plural')) }}:</h3>
        @if ($course->tests->isEmpty())
            <div class="container mb-3">
                <h3>{{ ucfirst(__('miscellaneous.none')) }}</h3>
            </div>
        @else
            @foreach ($tests->where("course_id", "=", $course->id) as $test)
                <div class="container mb-3">
                    <h3>
                        <a class="link" href="/tests/{{ $test->id }}">{{ $test->name }}</a>
                    </h3>
                </div>
            @endforeach
        @endif
    <h3 class="text-center">{{ ucfirst(__('miscellaneous.madeOn')) }}: {{ $course->created_at }}</h3>
    <h3 class="text-center mb-5">{{ ucfirst(__('miscellaneous.lastUpdatedOn')) }}: {{ $course->updated_at }}</h3>
    @can('create', $course)
        <div class="container mb-3">
            <form action="{{ route("courses.create") }}" method="get">
                <button type="submit">
                    <i class="fas fa-plus"></i>
                </button>
            </form>
        </div>
    @endcan
    @can('update', $course)
        <div class="container mb-3">
            <form action="/courses/{{$course->id}}/edit" method="GET">
                <button type="submit">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </form>
        </div>
    @endcan
    @can('delete', $course)
        {{-- Check to see if this is the final course --}}
        @if (count($courses) === 1)

        @else
            <div class="container mb-3">
                <form action="/courses/{{$course->id}}" method="POST">
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
