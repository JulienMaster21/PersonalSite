@extends('templates/emptyPage')
@section("title", ucfirst(__('miscellaneous.create.singular')) . ' ' . ucfirst(__('models.course.singular')))
@section("content")
    <p>* {{ ucfirst(__('miscellaneous.required')) }}</p>
    <div class="container mb-3">
        <form action="/courses" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name">{{ ucfirst(__('miscellaneous.name')) }}:</label>
                <input id="name" required type="text" name="name"
                       placeholder="{{ __('messages.name') }}" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.name') }}" onblur="checkName();">
            </div>

            <div class="form-group mb-5">
                <label for="blok_id">{{ ucfirst(__('models.blok.singular')) }}:</label>
                <select id="blok_id" name="blok_id" class="form-control"
                        data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                        data-content="{{ __('messages.dropdown') }}"
                        onblur="checkBlok();">
                    <option value="">{{ ucfirst(__('miscellaneous.none')) }}</option>
                    @foreach ($bloks as $blok)
                        <option value="{{ $blok->id }}">{{ ucfirst(__('models.blok.singular')) }} {{ $blok->id }}</option>
                    @endforeach
                </select>
            </div>

            <div class="container">
                <button type="submit">
                    <i class="fas fa-check"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="container">
        <form action="{{ url()->previous() }}">
            <button type="submit">
                <i class="fas fa-ban"></i>
            </button>
        </form>
    </div>
    <script rel="javascript" src="{{ secure_asset("js/validateCourse.js") }}"></script>
@endsection
