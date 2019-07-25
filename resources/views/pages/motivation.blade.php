@extends("templates/basePage")
@section("title", ucfirst(__('miscellaneous.motivation')))
@section("content")
    <h1 class="text-center">{{ ucfirst(__('motivation.head1')) }}</h1>
    <ol>
        <li>
            <a class="link" href="#theorie">{{ ucfirst(__('motivation.head2')) }}</a>
        </li>
        <li>
            <a class="link" href="#prestatie">{{ ucfirst(__('motivation.head6')) }}</a>
        </li>
        <li>
            <a class="link" href="#carriere">{{ ucfirst(__('motivation.head7')) }}</a>
        </li>
        <li>
            <a class="link" href="#conclusie">{{ ucfirst(__('motivation.head11')) }}</a>
        </li>
        <li>
            <a class="link" href="#bibliografie">{{ ucfirst(__('motivation.head12')) }}</a>
        </li>
    </ol>
    <h1 id="theorie" class="text-center anchor">{{ ucfirst(__('motivation.head2')) }}</h1>
    <h2 class="text-center">{{ ucfirst(__('motivation.head3')) }}?</h2>
    <p>{{ __('motivation.main1') }}</p>
    <h2 class="text-center">{{ ucfirst(__('motivation.head4')) }}?</h2>
    <p>{{ __('motivation.main2') }}</p>
    <h2 class="text-center">Dan Pink</h2>
    <p>{{ __('motivation.main3') }}</p>
    <h2 class="text-center">{{ ucfirst(__('motivation.head5')) }}</h2>
    <p>{{ __('motivation.main4') }}</p>
    <p>{{ __('motivation.main5') }}</p>
    <h1 id="prestatie" class="text-center anchor">{{ ucfirst(__('motivation.head6')) }}</h1>
    <p>{{ __('motivation.main6.part1') }}<strong class="fix_whitespace"><u>{{ __('motivation.main6.part2') }}</u></strong>
        {{ __('motivation.main6.part3') }}<strong class="fix_whitespaces"><u>
        {{ __('motivation.main6.part4') }}</u></strong>{{ __('motivation.main6.part5') }}<strong><u>
        {{ __('motivation.main6.part6') }}</u></strong>{{ __('motivation.main6.part7') }}<strong><u>
        {{ __('motivation.main6.part8') }}</u></strong>{{ __('motivation.main6.part9') }}
    </p>
    <p>{{ __('motivation.main7') }}</p>
    <h1 id="carriere" class="text-center anchor">{{ ucfirst(__('motivation.head7')) }}</h1>
    <h2 class="text-center">{{ ucfirst(__('motivation.head8')) }} (24 punten)</h2>
    <p>{{ __('motivation.main8') }}</p>
    <p>{{ __('motivation.main9') }}</p>
    <h2 class="text-center">{{ ucfirst(__('motivation.head9')) }} (21 punten)</h2>
    <p>{{ __('motivation.main10') }}</p>
    <p>{{ __('motivation.main11') }}</p>
    <h2 class="text-center">{{ ucfirst(__('motivation.head10')) }} (0 punten)</h2>
    <p>{{ __('motivation.main12') }}</p>
    <p>{{ __('motivation.main13') }}</p>
    <h1 id="conclusie" class="text-center anchor">{{ ucfirst(__('motivation.head11')) }}</h1>
    <p>{{ __('motivation.main14') }}</p>
    <p>{{ __('motivation.main15') }}</p>
    <h1 id="bibliografie" class="text-center anchor">{{ ucfirst(__('motivation.head12')) }}</h1>
    <h3>{{ ucfirst(__('motivation.head13')) }}</h3>
    <ul>
        <li>
            <a class="link" href="{{secure_asset("pdf/beoordeling_pitch.pdf")}}">{{ __('motivation.link1') }}</a>
        </li>
        <li>
            <a class="link" href="{{secure_asset("pdf/beoordeling_functioneel_1.pdf")}}">{{ __('motivation.link2') }}</a>
        </li>
        <li>
            <a class="link" href="{{secure_asset("pdf/beoordeling_functioneel_2.pdf")}}">{{ __('motivation.link3') }}</a>
        </li>
        <li>
            <a class="link" href="{{secure_asset("pdf/beoordeling_technisch_1.pdf")}}">{{ __('motivation.link4') }}</a>
        </li>
        <li>
            <a class="link" href="{{secure_asset("pdf/beoordeling_technisch_2.pdf")}}">{{ __('motivation.link5') }}</a>
        </li>
        <li>
            <a class="link" href="{{secure_asset("pdf/analyse_feedback.pdf")}}">{{ __('motivation.link6') }}</a>
        </li>
    </ul>
    <h3>{{ ucfirst(__('motivation.head14')) }}</h3>
    <ul>
        <li>
            <a class="link" href="https://controlandmotivate.nl/4-typen-motivatie/">{{ __('motivation.link7') }}</a>
        </li>
        <li>
            <a class="link" href="https://www.desteven.nl/leerdoelen/persoonlijke-leerdoelen/autonomie-leerdoelen/motivatie">{{ __('motivation.link8') }}</a>
        </li>
        <li>
            <a class="link" href="https://www.leren.nl/cursus/management/motiveren/wat-is-motivatie.html">{{ __('motivation.link9') }}</a>
        </li>
        <li>
            <a class="link" href="https://www.ted.com/talks/dan_pink_on_motivation">{{ __('motivation.link10') }}</a>
        </li>
        <li>
            <a class="link" href="http://www.carrieretijger.nl/functioneren/management/prestatiemotivatie">{{ __('motivation.link11') }}</a>
        </li>
        <li>
            <a class="link" href="https://nieuws.testnet.org/artikelen/de-motivatie-van-software-testend-nederland/">{{ __('motivation.link12') }}</a>
        </li>
    </ul>
    <h3>{{ ucfirst(__('motivation.head15')) }}</h3>
    <ul>
        <li>
            <a class="link" href="https://www.123test.nl/prestatiemotivatie/">{{ __('motivation.link13') }}</a>
        </li>
        <li>
            <a class="link" href="https://www.123test.nl/schein/">{{ __('motivation.link14') }}</a>
        </li>
    </ul>
@endsection
