@extends("templates/basePage")
@section("title", "Over mij")
@section("navbar")
    <!--Mobile dropdown menu-->
    <section class="hamburger_button" onclick="menu();">
        <div></div>
        <div></div>
        <div></div>
    </section>
    <!--Mobile navbar-->
    <section class="mobile_navbar" id="dropdown">
        <a href="{{route("index")}}">
            <div class="mobile_navbutton">Home</div>
        </a>
        <div class="mobile_navbutton_active">Over mij</div>
        <a href="{{route("dashboard")}}">
            <div class="mobile_navbutton">Dashboard</div>
        </a>
        <a href="{{route("beroepsbeeld")}}">
            <div class="mobile_navbutton">Beroepsbeeld</div>
        </a>
        <a href="{{route("motivatie")}}">
            <div class="mobile_navbutton">Motivatie</div>
        </a>
    </section>
    <!--Desktop navbar-->
    <section class="navbar">
        <div class="navcontainer">
            <a href="{{route("index")}}">
                <div class="navbutton">Home</div>
            </a>
            <div class="navbutton_active">Over mij</div>
            <a href="{{route("dashboard")}}">
                <div class="navbutton">Dashboard</div>
            </a>
            <a href="{{route("beroepsbeeld")}}">
                <div class="navbutton">Beroepsbeeld</div>
            </a>
            <a href="{{route("motivatie")}}">
                <div class="navbutton">Motivatie</div>
            </a>
        </div>
    </section>
@endsection
@section("content")
    <h1 class="center">Hallo Wereld, ik ben Julien Kenneth Pleijte.</h1>
    <section class="container">
        <div class="list_box">
            <h3>Hier is wat informatie over mijzelf:</h3>
            <ul>
                <li>Hobby's</li>
                    <ul>
                        <li>Warhammer 40.000</li>
                        <li>Gaming</li>
                        <li>Dungeons and Dragons</li>
                    </ul>
                <li>Favoriete Eten</li>
                    <ol>
                        <li>Pannenkoeken</li>
                        <li>Hamburgers</li>
                        <li>Pizza</li>
                    </ol>
                <li>Favoriete Games</li>
                    <ul>
                        <li>Terraria</li>
                        <li>De Dawn of War series</li>
                        <li>De Starcraft series</li>
                        <li>Hearthstone</li>
                        <li>The Elder Scrolls: Skyrim</li>
                        <li>Titan Quest</li>
                        <li>Factorio</li>
                    </ul>
            </ul>
        </div>
        <main class="text_box">
            <p>Ik ben 20 jaar oud en ik woon in Breskens. Ik ben geboren in de Duitse plaats Mönchengladbach.
                Mijn moeder is Duits en werkt als verpleegkundige bij een ziekenhuis. Mijn vader is Nederlands en is nu een vestigingsleider van Leys.
                Ik heb een jongere zus die een opleiding mediavormgeving aan Scalda in Vlissingen volgt.
            </p>
        </main>
        <div class="image_box">
            <a href="https://www.instagram.com/julienmaster21/">
                <img class="image" src="{{asset("images/terminator_captain.jpg")}}" alt="My miniature model of a terminator captain."/></a>
            <p>Dit is een van mijn modellen die ik in elkaar heb gezet en geschilderd.</p>
            <a href="{{route("emperor")}}">
                <img class="image" src="{{asset("images/emperor_of_mankind.jpg")}}" alt="The Holy image of the Emperor of Mankind."/>
            </a>
            <p>Dit is de Emperor of Mankind. Hij is de leider van de Imperium of Man.</p>
        </div>
    </section>
@endsection
