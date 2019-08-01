@extends('templates/emptyPage')
@section("title", ucfirst(__('miscellaneous.create.plural')) . ' ' . ucfirst(__('models.assignment.singular')))
@section("content")
    <div class="container">
        <form action="/assignments" method="POST" id="form">
            @csrf
            <div class="form-group">
                <label for="name">{{ ucfirst(__('miscellaneous.name')) }}:</label>
                <input id="name" required type="text" name="name"
                        @if (old("name") !== NULL)
                        value="{{old("name")}}"
                        @else

                        @endif
                       placeholder="{{ __('messages.name') }}" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.name') }}" onblur="checkName();">
            </div>
            <div class="form-group">
                <label for="url">{{ ucfirst(__('miscellaneous.imagesSource')) }}:</label>
                <input id="url" required type="text" name="url"
                       @if (old("url") !== NULL)
                       value="{{old("url")}}"
                       @else

                       @endif
                       placeholder="{{ __('messages.imageSource') }}" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.imageSource') }}" onblur="checkURL();">
            </div>
            <div class="form-group">
                <label for="description">{{ ucfirst(__('miscellaneous.description')) }}: </label>
                <input id="description" required type="text" name="description"
                       @if (old("description") !== NULL)
                       value="{{old("description")}}"
                       @else

                       @endif
                       placeholder="{{ __('messages.description') }}" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.description') }}" onblur="checkDescription();">
            </div>
            <div class="container mb-3">
                <button type="submit">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="container">
        <form action="{{ route("assignments.index" )}}" method="get">
            <button type="submit">
                <i class="fas fa-ban"></i>
            </button>
        </form>
    </div>
    <script rel="javascript" src="{{ secure_asset("js/validateAssignment.js") }}"></script>
@endsection
