@extends("templates/basePage")
@section("title", "Dashboard")
@section("content")
    <h1 class="center">Studiemonitor</h1>
    <table class="monitor">
        <tbody>
            <tr>
                <th>Cursus</th>
                <th>Naam</th>
                <th>Behaald?</th>
                <th>Cijfer</th>
                <th>EC's</th>
            </tr>
            @foreach ($bloks as $blok)
                <tr class="blok">
                    <td colspan="5">
                        <a class="link" href="bloks/{{ $blok->id }}">Blok {{ $blok->id }}</a>
                    </td>
                </tr>
                @foreach ($courses->where("blok_id", "=", $blok->id) as $course)
                    @if (count($course->tests) == 0)
                        <tr>
                            <td>
                                <a class="link" href="/courses/{{ $course->id }}">{{ $course->name }}</a>
                            </td>
                            <td>Geen</td>
                            <td>Geen</td>
                            <td>Geen</td>
                            <td>Geen</td>
                        </tr>
                    @else
                        @foreach ($tests->where("course_id", "=", $course->id) as $test)
                            <tr>
                                <td>
                                    <a class="link" href="courses/{{ $course->id }}">{{ $course->name }}</a>
                                </td>
                                <td>
                                    <a class="link" href="tests/{{ $test->id }}">{{ $test->name }}</a>
                                </td>
                                <td>{{ $test->completed ? "Ja" : "Nee" }}</td>
                                <td>{{ $test->grade }}</td>
                                <td>{{ $test->EC }}</td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
            @endforeach
            <tr class="blok">
                <td colspan="5">Niet aangewezen cursussen</td>
            </tr>
            <tr>
                <th colspan="5">Naam</th>
            </tr>
            @foreach ($courses->where("blok_id", "=", NULL) as $course)
                <tr>
                    <td colspan="5">
                        <a href="/courses/{{ $course->id }}">{{ $course->name }}</a>
                    </td>
                </tr>
                @endforeach
            <tr class="blok">
                <td colspan="5">Niet aangewezen toetsen</td>
            </tr>
            <tr>
                <th colspan="2">Naam</th>
                <th>Behaald?</th>
                <th>Cijfer</th>
                <th>EC's</th>
            </tr>
            @foreach ($tests->where("course_id", "=", NULL) as $test)
                <tr>
                    <td colspan="2">
                        <a class="link" href="tests/{{ $test->id }}">{{ $test->name }}</a>
                    </td>
                    <td>{{ $test->completed ? "Ja" : "Nee" }}</td>
                    <td>{{ $test->grade }}</td>
                    <td>{{ $test->EC }}</td>
                </tr>
            @endforeach
            <tr
            @if ($ECValues[0] < 45)
                class="blok failed"
            @elseif ($ECValues[0] < 60)
                class="blok inprogress"
            @else
                class="blok"
            @endif>
                <td colspan="4">Totaal</td>
                <td>{{$ECValues[0]}}/{{$ECValues[1]}}</td>
            </tr>
        </tbody>
    </table>
    <h1 class="center">Voortgang van Propedeuse</h1>
    <progress value="{{$ECValues[0]}}" max="60"
    @if ($ECValues[0] < 45)
        class="marginbottom belowMSBA"
    @elseif ($ECValues[0] < 60)
        class="marginbottom belowPropedeuse"
    @else
        class="marginbottom"
    @endif
    ></progress>
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
