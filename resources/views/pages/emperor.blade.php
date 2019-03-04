@extends("templates/emptyPage")
@section("title", "FOR THE EMPEROR!")
@section("content")
    <audio loop autoplay>
        <source src= "{{asset("audio/we_are_one.mp3")}}" type="audio/mpeg">
    </audio>
    <main class="flex">
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
    <script src="{{asset("js/meme.js")}}" rel="javascript"></script>
@endsection
