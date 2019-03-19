@extends('templates/BasePage')
@section("title", "Assignments")
@section("content")
    @foreach ($assignments as $assignment)
        <form action="/assignments/{{$assignment->id}}" method="POST">
            @method("PATCH")
            @csrf
            <div class="flex">
                <input required name="name" value="{{$assignment->project_name}}">
            </div>
            <div class="flex">
                <img src="{{$assignment->image_url}}">
            </div>
            <div class="flex">
                <input required name="url" value="{{$assignment->image_url}}">
            </div>
            <div class="flex">
                <input required name="description" value="{{$assignment->description}}">
            </div>
            <div class="flex">
                <button type="submit" name="id" value="{{$assignment->id}}">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </div>
        </form>
        <form action="/assignments/{{$assignment->id}}" method="POST">
            @method("DELETE")
            @csrf
            <div class="flex marginbottom">
                <button type="submit">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>
        </form>
    @endforeach
    <table class="monitor">
        <form action="/assignments" method="POST">
            @csrf
            <tbody>
                <tr>
                    <th>Project Naam</th>
                    <th>Image Url</th>
                    <th>Beschrijving</th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <input required name="name" placeholder="project naam">
                    </td>
                    <td>
                        <input required name="url" placeholder="image url">
                    </td>
                    <td>
                        <input required name="description" placeholder="beschrijving">
                    </td>
                    <td><button type="submit" name="submit" value="submit">
                        <i class="fas fa-plus"></i>
                    </button></td>
                </tr>
            </tbody>
        </form>
    </table>
@endsection
