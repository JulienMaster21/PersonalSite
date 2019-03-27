@extends("templates/basePage")
@section("title", "Home")
@section("content")
    <h1 class="center">Hier zijn de redenen waarom deze opleiding bij mij past.</h1>
    <section class="container">
        <div class="list_box">
            <ul>
                <p class="bold">In het kort:</p>
                <li>Ik ben zelfstandig.</li>
                <li>Ik vind computers heel leuk.</li>
                <li>Ik heb al eerder geprogrammeerd.</li>
                <li>Ik ben praktisch ingesteld.</li>
            </ul>
        </div>
        <div class="text_box">
            <h1 class="center">Het HBO-niveau past bij mij omdat:</h1>
            <p>Ik heb Atheneum succesvol afgerond, maar ik was altijd al praktischer ingesteld dan mijn klasgenoten.
                Hierdoor wist ik al meteen dat ik liever een HBO opleiding wou volgen, dan naar de universiteit te gaan.
                Daarnaast, heb ik van mijn vorige opleiding geleerd om zelfstandig te kunnen werken.
                Ik had ook als keuzevak voor informatica gekozen. Bij deze les begon ik voor het eerst te programmeren.
                Ik heb daar html, css, php en javascript leren te programmeren.
            </p>
            <h1 class="center">De opleiding past bij mijn persoonlijkheid omdat:</h1>
            <p>Deze opleiding geeft een praktische draai aan het leren, die ik miste bij de vwo-opleiding.
                Ik hou ervan om aan projecten te werken. Het motiveert mij als ik het effect van mijn werk kan zien.
                Verder, kan ik goed zelfstandig aan mijn taken werken, maar ik kan ook mijn projectgenoten uit de brand helpen.
            </p>
        </div>
        <div class="image_box">
            <img class="image" src="{{asset("images/de_rede.jpg")}}" />
            <p class="cursive">Hier heb ik mijn Atheneum diploma behaald.</p>
        </div>
    </section>
    <table class="languages">
        <tbody>
            <tr>
                <th>Programmeertaal</th>
                <th>mijn Bekendheid</th>
            </tr>
            <tr>
                <td>HTML</td>
                <td>zeer bekend</td>
            </tr>
            <tr>
                <td>CSS</td>
                <td>bekend</td>
            </tr>
            <tr>
                <td>php</td>
                <td>kan er mee overweg</td>
            </tr>
            <tr>
                <td>javascript</td>
                <td>beginner</td>
            </tr>
        </tbody>
    </table>
@endsection
