@extends("templates/emptyPage")
@section("title", ucfirst(__('miscellaneous.edit', ['object' => ucfirst(__('models.test.singular'))])))
@section("content")
    <p>* {{ ucfirst(__('miscellaneous.required')) }}</p>
    <div class="container">
        <form action="/tests/{{ $test->id }}" method="POST" id="form">
            @method("PATCH")
            @csrf

            <div class="form-group">
                <label for="name">*{{ ucfirst(__('miscellaneous.name')) }}:</label>
                <input id="name" required type="text" name="name" value="{{ $test->name }}"
                       placeholder="{{ __('messages.name') }}" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.name') }}" onblur="checkName();">
            </div>

            <div class="form-group">
                <label for="grade">{{ ucfirst(__('dashboard.head4')) }}:</label>
                <input id="grade" required type="text" name="grade" value="{{ $test->grade }}"
                       placeholder="{{ __('messages.number') }}" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.number') }}" onblur="checkGrade();">
            </div>

            <div class="form-check mb-3">
                <input id="completed" type="checkbox" name="completed" value="1"
                       @if ($test->completed === 1)
                            checked
                       @endif
                       class="form-check-input" onblur="checkCompleted();">
                <label for="completed" class="form-check-label">{{ ucfirst(__('miscellaneous.sufficient')) }}?</label>
            </div>

            <div class="form-group">
                <label for="EC">*{{ ucfirst(__('miscellaneous.ECValue')) }}:</label>
                <input id="EC" required type="text" name="EC" value="{{ $test->EC }}"
                       placeholder="{{ __('messages.number') }}" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.number') }}" onblur="checkEC();">
            </div>

            <div class="form-group">
                <label for="course_id">{{ ucfirst(__('models.course.singular')) }}:</label>
                <select id="course_id" name="course_id" class="form-control"
                        data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                        data-content="{{ __('messages.dropdown') }}"
                        onblur="checkCourse();">
                    <option value=""
                    @if ($test->course_id === NULL)
                        selected
                    @endif>{{ ucfirst(__('miscellaneous.none')) }}</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}"
                        @if ($test->course_id === $course->id)
                            selected
                        @endif>{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="container mb-3">
                <button type="submit">
                    <i class="fas fa-check"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="container">
        <form action="{{ url()->previous() }}" method="get">
            <button type="submit">
                <i class="fas fa-ban"></i>
            </button>
        </form>
    </div>
    <script rel="javascript" src="{{ secure_asset("js/validateTest.js") }}"></script>
@endsection
