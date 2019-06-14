@extends("templates/basePage")
@section("title", "Home")
@section("content")
    <h1 class="text-center mx-1">Hier zijn de redenen waarom deze opleiding bij mij past.</h1>
    <section class="container-fluid row p-0 m-0">
        <div class="col-3 list_box">
            <p class="font-weight-bold">In het kort:</p>
            <ul>
                <li>Ik ben zelfstandig.</li>
                <li>Ik vind computers heel leuk.</li>
                <li>Ik heb al eerder geprogrammeerd.</li>
                <li>Ik ben praktisch ingesteld.</li>
            </ul>
        </div>
        <div class="text_box col-lg">
            <h1 class="text-center">Het HBO-niveau past bij mij omdat:</h1>
            <p>Ik heb Atheneum succesvol afgerond, maar ik was altijd al praktischer ingesteld dan mijn klasgenoten.
                Hierdoor wist ik al meteen dat ik liever een HBO opleiding wou volgen, dan naar de universiteit te gaan.
                Daarnaast, heb ik van mijn vorige opleiding geleerd om zelfstandig te kunnen werken.
                Ik had ook als keuzevak voor informatica gekozen. Bij deze les begon ik voor het eerst te programmeren.
                Ik heb daar html, css, php en javascript leren te programmeren.
            </p>
            <h1 class="text-center">De opleiding past bij mijn persoonlijkheid omdat:</h1>
            <p>Deze opleiding geeft een praktische draai aan het leren, die ik miste bij de vwo-opleiding.
                Ik hou ervan om aan projecten te werken. Het motiveert mij als ik het effect van mijn werk kan zien.
                Verder, kan ik goed zelfstandig aan mijn taken werken, maar ik kan ook mijn projectgenoten uit de brand helpen.
            </p>
        </div>
        <div class="image_box col-sm">
            <img class="img-fluid" src="{{asset("images/de_rede.jpg")}}" />
            <p class="font-italic">Hier heb ik mijn Atheneum diploma behaald.</p>
        </div>
    </section>
    <table class="languages mx-auto mb-3 text-center">
        <thead>
            <tr>
                <th>Programmeertaal</th>
                <th>mijn Bekendheid</th>
            </tr>
        </thead>
        <tbody>
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
