@extends('templates/emptyPage')
@section("title", ucfirst(__('models.test.singular')) . ' ' . $test->id)
@section("content")
    <h3 class="text-center">{{ ucfirst(__('models.test.singular')) }}: {{ $test->name }}</h3>
    <h3 class="text-center">{{ ucfirst(__('dashboard.head3')) }}: {{ $test->completed === 1 ? ucfirst(__('miscellaneous.yes')) : ucfirst(__('miscellaneous.no')) }}</h3>
    <h3 class="text-center">{{ ucfirst(__('dashboard.head4')) }}: {{ $test->grade }}</h3>
    <h3 class="text-center">{{ ucfirst(__('dashboard.head5')) }}: {{ $test->EC }}</h3>
    <h3 class="text-center">{{ ucfirst(__('models.course.singular')) }}:
        @if ($test->course_id === NULL)
            {{ ucfirst(__('miscellaneous.none')) }}
        @else
            <a class="link" href="/courses/{{ $course->id }}">{{ $course->name }}</a>
        @endif
    </h3>
    <h3 class="text-center">{{ ucfirst(__('miscellaneous.madeOn')) }}: {{ $test->created_at }}</h3>
    <h3 class="text-center mb-5">{{ ucfirst(__('miscellaneous.lastUpdatedOn')) }}: {{ $test->updated_at }}</h3>
    @can('create', $test)
        <div class="container mb-3">
            <form action="{{ route("tests.create") }}" method="get">
                <button type="submit">
                    <i class="fas fa-plus"></i>
                </button>
            </form>
        </div>
    @endcan
    @can('update', $test)
        <div class="container mb-3">
            <form action="/tests/{{ $test->id }}/edit" method="GET">
                <button type="submit">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </form>
        </div>
    @endcan
    @can('delete', $test)
        {{-- Check to see if this is the final test --}}
        @if (count($tests) === 1)

        @else
            <div class="container mb-3">
                <form action="/tests/{{ $test->id }}" method="POST">
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
