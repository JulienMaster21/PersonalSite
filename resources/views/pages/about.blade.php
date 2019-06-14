@extends("templates/basePage")
@section("title", "Over mij")
@section("content")
    <h1 class="text-center">Hallo Wereld, ik ben Julien Kenneth Pleijte.</h1>
    <section class="container-fluid row p-0 m-0">
        <div class="list_box col-sm">
            <h3>Hier is wat informatie over mijzelf:</h3>
            <ul>
                <li>Hobby's
                    <ul>
                        <li>Warhammer 40.000</li>
                        <li>Gaming</li>
                        <li>Dungeons and Dragons</li>
                    </ul>
                </li>
                <li>Favoriete Eten
                    <ol>
                        <li>Pannenkoeken</li>
                        <li>Hamburgers</li>
                        <li>Pizza</li>
                    </ol>
                </li>
                <li>Favoriete Games
                    <ul>
                        <li>Terraria</li>
                        <li>De Dawn of War series</li>
                        <li>De Starcraft series</li>
                        <li>Hearthstone</li>
                        <li>The Elder Scrolls: Skyrim</li>
                        <li>Titan Quest</li>
                        <li>Factorio</li>
                    </ul>
                </li>
            </ul>
        </div>
        <main class="text_box col-sm">
            <p>Ik ben 20 jaar oud en ik woon in Breskens. Ik ben geboren in de Duitse plaats Mönchengladbach.
                Mijn moeder is Duits en werkt als verpleegkundige bij een ziekenhuis. Mijn vader is Nederlands en is nu een vestigingsleider van Leys.
                Ik heb een jongere zus die een opleiding mediavormgeving aan Scalda in Vlissingen volgt.
            </p>
        </main>
        <div class="image_box col-sm">
            <a href="https://www.instagram.com/julienmaster21/">
                <img class="img-fluid" src="{{asset("images/terminator_captain.jpg")}}" alt="My miniature model of a terminator captain."/></a>
            <p>Dit is een van mijn modellen die ik in elkaar heb gezet en geschilderd.</p>
            <a href="{{route("emperor")}}">
                <img class="img-fluid" src="{{asset("images/emperor_of_mankind.jpg")}}" alt="The Holy image of the Emperor of Mankind."/>
            </a>
            <p>Dit is de Emperor of Mankind. Hij is de leider van de Imperium of Man.</p>
        </div>
    </section>
@endsection
