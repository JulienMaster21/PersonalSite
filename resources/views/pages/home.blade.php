@extends("templates/basePage")
@section("title", ucfirst(__('miscellaneous.home')))
@section("content")
    <h1 class="text-center mx-1">{{ ucfirst(__('home.title')) }}</h1>
    <section class="container-fluid row p-0 m-0">
        <div class="col-3 list_box">
            <p class="font-weight-bold">{{ ucfirst(__('home.list.title')) }}:</p>
            <ul>
                <li>{{ ucfirst(__('home.list.point1')) }}</li>
                <li>{{ ucfirst(__('home.list.point2')) }}</li>
                <li>{{ ucfirst(__('home.list.point3')) }}</li>
                <li>{{ ucfirst(__('home.list.point4')) }}</li>
            </ul>
        </div>
        <div class="text_box col-lg">
            <h1 class="text-center">{{ ucfirst(__('home.main.title1')) }}:</h1>
            <p>{{ __('home.main.text1') }}</p>
            <h1 class="text-center">{{ ucfirst(__('home.main.title2')) }}:</h1>
            <p>{{ __('home.main.text2') }}</p>
        </div>
        <div class="image_box col-sm">
            <img class="img-fluid" src="{{secure_asset("images/de_rede.jpg")}}" />
            <p class="font-italic">{{ ucfirst(__('home.imageText')) }}</p>
        </div>
    </section>
    <table class="languages mx-auto mb-3 text-center">
        <thead>
            <tr>
                <th>{{ ucfirst(__('home.table.head1')) }}</th>
                <th>{{ ucfirst(__('home.table.head2')) }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ __('home.table.HTML1') }}</td>
                <td>{{ ucfirst(__('home.table.HTML2')) }}</td>
            </tr>
            <tr>
                <td>{{ __('home.table.CSS1') }}</td>
                <td>{{ ucfirst(__('home.table.CSS2')) }}</td>
            </tr>
            <tr>
                <td>{{ __('home.table.PHP1') }}</td>
                <td>{{ ucfirst(__('home.table.PHP2')) }}</td>
            </tr>
            <tr>
                <td>{{ ucfirst(__('home.table.javascript1')) }}</td>
                <td>{{ ucfirst(__('home.table.javascript2')) }}</td>
            </tr>
        </tbody>
    </table>
@endsection
