@extends("templates/basePage")
@section("title", ucfirst(__('miscellaneous.dashboard')))
@section("content")
    <h1 class="text-center">{{ ucfirst(__('dashboard.studymonitor')) }}</h1>
    <table class="text-center monitor mx-auto">
        <thead>
            <tr>
                <th>{{ ucfirst(__('dashboard.head1')) }}</th>
                <th>{{ ucfirst(__('dashboard.head2')) }}</th>
                <th>{{ ucfirst(__('dashboard.head3')) }}?</th>
                <th>{{ ucfirst(__('dashboard.head4')) }}</th>
                <th>{{ ucfirst(__('dashboard.head5')) }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bloks as $blok)
                <tr class="blok">
                    <td colspan="5">
                        @can('view', $blok)
                            <a class="link" href="bloks/{{ $blok->id }}">{{ ucfirst(__('models.blok.singular')) }} {{ $blok->id }}</a>
                        @else
                           {{ ucfirst(__('models.blok.singular')) }}  {{ $blok->id }}
                        @endcan
                    </td>
                </tr>
                @foreach ($courses->where("blok_id", "=", $blok->id) as $course)
                    @if ($course->tests->isEmpty())
                        <tr>
                            <td>
                                @can('view', $course)
                                    <a class="link" href="/courses/{{ $course->id }}">{{ $course->name }}</a>
                                @else
                                    {{ $course->name }}
                                @endcan
                            </td>
                            <td>{{ ucfirst(__('miscellaneous.none')) }}</td>
                            <td>{{ ucfirst(__('miscellaneous.none')) }}</td>
                            <td>{{ ucfirst(__('miscellaneous.none')) }}</td>
                            <td>{{ ucfirst(__('miscellaneous.none')) }}</td>
                        </tr>
                    @else
                        @foreach ($tests->where("course_id", "=", $course->id) as $test)
                            <tr>
                                <td>
                                    @can('view', $course)
                                        <a class="link" href="courses/{{ $course->id }}">{{ $course->name }}</a>
                                    @else
                                        {{ $course->name }}
                                    @endcan
                                </td>
                                <td>
                                    @can('view', $test)
                                        <a class="link" href="tests/{{ $test->id }}">{{ $test->name }}</a>
                                    @else
                                        {{ $test->name }}
                                    @endcan
                                </td>
                                <td>{{ $test->completed === 1 ? ucfirst(__('miscellaneous.yes')) : ucfirst(__('miscellaneous.no')) }}</td>
                                <td>{{ $test->grade }}</td>
                                <td>{{ $test->EC }}</td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
            @endforeach
            <tr class="blok">
                <td colspan="5">{{ ucfirst(__('dashboard.notAssignedCourses')) }}</td>
            </tr>
            <tr>
                <th colspan="5">{{ ucfirst(__('dashboard.head2')) }}</th>
            </tr>
            @foreach ($courses->where("blok_id", "=", NULL) as $course)
                <tr>
                    <td colspan="5">
                        @can('view', $course)
                            <a class="link" href="/courses/{{ $course->id }}">{{ $course->name }}</a>
                        @else
                            {{ $course->name }}
                        @endcan
                    </td>
                </tr>
                @endforeach
            <tr class="blok">
                <td colspan="5">{{ ucfirst(__('dashboard.notAssignedTests')) }}</td>
            </tr>
            <tr>
                <th colspan="2">{{ ucfirst(__('dashboard.head2')) }}</th>
                <th>{{ ucfirst(__('dashboard.head3')) }}?</th>
                <th>{{ ucfirst(__('dashboard.head4')) }}</th>
                <th>{{ ucfirst(__('dashboard.head5')) }}</th>
            </tr>
            @foreach ($tests->where("course_id", "=", NULL) as $test)
                <tr>
                    <td colspan="2">
                        @can('view', $test)
                            <a class="link" href="tests/{{ $test->id }}">{{ $test->name }}</a>
                        @else
                            {{ $test->name }}
                        @endcan
                    </td>
                    <td>{{ $test->completed === 1 ? ucfirst(__('miscellaneous.yes')) : ucfirst(__('miscellaneous.no')) }}</td>
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
                <td colspan="4">{{ ucfirst(__('miscellaneous.total')) }}</td>
                <td>{{ $ECValues[0] }}/{{ $ECValues[1] }}</td>
            </tr>
        </tbody>
    </table>
    <h1 class="text-center">{{ ucfirst(__('dashboard.progress')) }}</h1>
    <div class="progress mb-3 mx-auto">
        <div aria-valuenow="{{ $ECValues[0] }}" aria-valuemin="0" aria-valuemax="{{ $ECValues[1] }}" role="progressbar"
             class="progress-bar
             @if ($ECValues[0] < 45)
                {{ "bg-danger" }}
             @elseif ($ECValues[0] < 60)
                {{ "bg-warning" }}
             @else
                {{ "bg-success" }}
             @endif "
             style="width:{{ $ECValues[0]/$ECValues[1] * 100 }}%;">{{ $ECValues[0]/$ECValues[1] * 100 }}%
        </div>
    </div>
    <h1 class="text-center">{{ ucfirst(__('dashboard.studyguide.title')) }}</h1>
    <ul>
        <li>
            <a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-2018-2019docv2018-06-26DEFCvB-V-01.pdf" class="link">{{ ucfirst(__('dashboard.studyguide.link1')) }}</a>
        </li>
        <li>
            <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2017-2018/HBO-ICT-2017-2018-OER.pdf" class="link">{{ ucwords(__('dashboard.studyguide.link2')) }}</a>
        </li>
        <li>
            <a href="https://learn.hz.nl/" class="link">{{ ucfirst(__('dashboard.studyguide.link3')) }}</a>
        </li>
        <li>
            <a href="https://apps.hz.nl/angular/studievoortgang" class="link">{{ ucwords(__('dashboard.studyguide.link4')) }}</a>
        </li>
        <li>
            <a href="https://github.com/HZ-HBO-ICT/hz-hbo-ict.github.io" class="link">{{ ucfirst(__('dashboard.studyguide.link5')) }}</a>
        </li>
        <li>
            <a href="https://hz-hbo-ict.slack.com" class="link">{{ ucfirst(__('dashboard.studyguide.link6')) }}</a>
        </li>
    </ul>
@endsection
