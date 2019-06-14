@extends("templates/memePage")
@section("title", "FOR THE EMPEROR!")
@section("content")
    <audio loop autoplay>
        <source src= "{{asset("audio/we_are_one.mp3")}}" type="audio/mpeg">
    </audio>
    <main>
        <a href="{{route("about")}}">
            <img class="memes emperormeme" src="{{asset("images/taste_the_rainbow.gif")}}"/>
        </a>
        <img class="memes" src="{{asset("images/drive_me_closer.jpg")}}"/>
        <img class="memes" src="{{asset("images/artillery.jpg")}}"/>
        <img class="memes" src="{{asset("images/social.jpg")}}"/>
        <img class="memes" src="{{asset("images/dont_worry.jpg")}}"/>
        <img class="memes" class="" src="{{asset("images/i_dont_want_to.jpg")}}"/>
        <img class="memes" src="{{asset("images/dreadnought.jpg")}}"/>
    </main>
    <div class="container mt-5">
        <form action="{{ route('about') }}">
            <button class="btn-lg" type="submit">
                <i class="fas fa-arrow-left"></i>
            </button>
        </form>
    </div>
    <script src="{{asset("js/meme.js")}}" rel="javascript"></script>
@endsection
