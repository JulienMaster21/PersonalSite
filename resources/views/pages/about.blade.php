@extends("templates/basePage")
@section("title", ucfirst(__('miscellaneous.about')))
@section("content")
    <h1 class="text-center">{{ ucfirst(__('about.title')) }}</h1>
    <section class="container-fluid row p-0 m-0">
        <div class="list_box col-sm">
            <h3>{{ ucfirst(__('about.list.title')) }}:</h3>
            <ul>
                <li>{{ ucfirst(__('about.list.hobbies.title')) }}
                    <ul>
                        <li>{{ ucfirst(__('about.list.hobbies.point1')) }}</li>
                        <li>{{ ucfirst(__('about.list.hobbies.point2')) }}</li>
                        <li>{{ ucfirst(__('about.list.hobbies.point3')) }}</li>
                    </ul>
                </li>
                <li>{{ ucfirst(__('about.list.food.title')) }}
                    <ol>
                        <li>{{ ucfirst(__('about.list.food.point1')) }}</li>
                        <li>{{ ucfirst(__('about.list.food.point2')) }}</li>
                        <li>{{ ucfirst(__('about.list.food.point3')) }}</li>
                    </ol>
                </li>
                <li>{{ ucfirst(__('about.list.games.title')) }}
                    <ul>
                        <li>{{ ucfirst(__('about.list.games.point1')) }}</li>
                        <li>{{ ucfirst(__('about.list.games.point2')) }}</li>
                        <li>{{ ucfirst(__('about.list.games.point3')) }}</li>
                        <li>{{ ucfirst(__('about.list.games.point4')) }}</li>
                        <li>{{ ucwords(__('about.list.games.point5')) }}</li>
                        <li>{{ ucwords(__('about.list.games.point6')) }}</li>
                        <li>{{ ucfirst(__('about.list.games.point7')) }}</li>
                    </ul>
                </li>
            </ul>
        </div>
        <main class="text_box col-sm">
            <p>{{ __('about.main') }}</p>
        </main>
        <div class="image_box col-sm">
            <a href="https://www.instagram.com/julienmaster21/">
                <img class="img-fluid" src="{{secure_asset("images/terminator_captain.jpg")}}" alt="{{ ucfirst(__('about.imageText.alt1')) }}"/></a>
            <p>{{ ucfirst(__('about.imageText.text1')) }}</p>
            <a href="{{route("emperor")}}">
                <img class="img-fluid" src="{{secure_asset("images/emperor_of_mankind.jpg")}}" alt="{{ ucfirst(__('about.imageText.alt2')) }}"/>
            </a>
            <p>{{ ucfirst(__('about.imageText.text2')) }}</p>
        </div>
    </section>
@endsection
