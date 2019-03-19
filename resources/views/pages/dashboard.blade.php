@extends("templates/basePage")
@section("title", "Dashboard")
@section("content")
    <h1 class="center">Studiemonitor</h1>
    <table class="monitor">
        <tbody>
            <tr>
                <th>Blok</th>
                <th>Cursus</th>
                <th>Toetsonderdeel</th>
                <th>Behaald?</th>
                <th>Cijfer</th>
                <th>EC's</th>
                <th></th>
            </tr>
            @foreach ($bloks as $blok)
                <tr class="blok">
                    <td colspan="7">Blok {{$blok}}</td>
                </tr>
                @foreach ($tests as $test)
                    @if ($test->blok == $blok)
                    <tr>
                        <form action="/updateTest" method="POST">
                            @csrf
                            <td>
                                <input required value="{{$test->blok}}" type="number" name="blok">
                            </td>
                            <td>
                                <input required value="{{$test->cursus}}" type="text" name="cursus">
                            </td>
                            <td>
                                <input required value="{{$test->subject}}" type="text" name="subject">
                            </td>
                            <td>
                                <input required value=1 type="radio" name="completed" {{$test->completed ? "checked" : NULL}}>
                                <label>Ja</label>
                                <input required value=0 type="radio" name="completed" {{!$test->completed ? "checked" : NULL}}>
                                <label>Nee</label>
                            </td>
                            <td>
                                <input value="{{$test->grade}}" type="text" name="grade">
                            </td>
                            <td>
                                <input required value="{{$test->EC}}" type="text" name="EC">
                            </td>
                            <td class="flex">
                                <button type="submit" name="id" value="{{$test->id}}">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                        </form>
                            <form action="/deleteTest" method="POST">
                                @csrf
                                <button type="submit" name="id" value="{{$test->id}}">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endif
                @endforeach
            @endforeach
            <tr
            @if ($ECValues[0] < 45)
                class="blok failed"
            @elseif ($ECValues[0] < 60)
                class="blok inprogress"
            @else
                class="blok"
            @endif>
                <td colspan="5">Totaal</td>
                <td>{{$ECValues[0]}}/{{$ECValues[1]}}</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <h1 class="center">Voortgang van Propedeuse</h1>
    <progress value="{{$ECValues[0]}}" max="{{$ECValues[1]}}"
    @if ($ECValues[0] < 45)
        class="belowMSBA"
    @elseif ($ECValues[0] < 60)
        class="belowPropedeuse"
    @endif
    ></progress
    <h1 class="center">Voeg een cijfer toe</h1>
    <table class="monitor">
        <tbody>
            <tr>
                <th>Blok</th>
                <th>Cursus</th>
                <th>Toetsonderdeel</th>
                <th>Afgerond?</th>
                <th>cijfer</th>
                <th>EC's</th>
                <th></th>
            </tr>
            <tr>
                <form action="/createTest" method="POST">
                    @csrf
                    <td>
                        <input required placeholder="Blok" name="blok">
                    </td>
                    <td>
                        <input required placeholder="Cursus" name="cursus">
                    </td>
                    <td>
                        <input required placeholder="Toetsonderdeel" name="subject">
                    </td>
                    <td>
                        <input required value=1 type="radio" name="completed">
                        <label>Ja</label>
                        <input required value=0 type="radio" name="completed">
                        <label>Nee</label>
                    </td>
                    <td>
                        <input placeholder="cijfer" name="grade">
                    </td>
                    <td>
                        <input required placeholder="EC's" name="EC">
                    </td>
                    <td>
                        <button type="submit" name="submit" value="submit">
                            <i class="fas fa-plus"></i>
                        </button>
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
    <h1 class="center">Studiewijzer</h1>
    <ul>
        <li>
            <a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-2018-2019docv2018-06-26DEFCvB-V-01.pdf" class="link">Het Onderwijs en Examenregelement</a>
        </li>
        <li>
            <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2017-2018/HBO-ICT-2017-2018-OER.pdf" class="link">De Uitvoeringsregeling</a>
        </li>
        <li>
            <a href="https://learn.hz.nl/" class="link">De Learn omgeving van de HZ</a>
        </li>
        <li>
            <a href="https://apps.hz.nl/angular/studievoortgang" class="link">De Studievoortgang</a>
        </li>
        <li>
            <a href="https://github.com/HZ-HBO-ICT/hz-hbo-ict.github.io" class="link">De Github omgeving van HZ-HBO-ICT</a>
        </li>
        <li>
            <a href="https://hz-hbo-ict.slack.com" class="link">De Slack van HZ-HBO-ICT</a>
        </li>
    </ul>
@endsection
