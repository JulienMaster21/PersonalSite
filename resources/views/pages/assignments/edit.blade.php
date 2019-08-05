@extends('templates/emptyPage')
@section("title", ucfirst(__('miscellaneous.edit', ['object' => ucfirst(__('models.assignment.singular'))])))
@section("content")
    <div class="container">
        <form action="/assignments/{{ $assignment->id }}" method="POST" id="form">
            @method("PATCH")
            @csrf
            <div class="form-group">
                <label for="name">{{ ucfirst(__('miscellaneous.name')) }}:</label>
                <input id="name" required type="text" name="name" value="{{ $assignment->name }}"
                       placeholder="{{ __('messages.name') }}" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.name') }}" onblur="checkName();">
            </div>
            <div class="form-group">
                <label for="url">{{ ucfirst(__('miscellaneous.imageSource')) }}:</label>
                <input id="url" required type="text" name="url" value="{{ $assignment->url }}"
                       placeholder="{{ __('messages.imageSource') }}" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.imageSource') }}" onblur="checkURL();">
            </div>
            <div class="form-group">
                <label for="description">{{ ucfirst(__('miscellaneous.description')) }}:</label>
                <input id="description" required type="text" name="description" value="{{ $assignment->description }}"
                       placeholder="{{ __('messages.description') }}" class="form-control"
                       data-trigger="focus" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="{{ __('messages.description') }}" onblur="checkDescription();">
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
@endsection
