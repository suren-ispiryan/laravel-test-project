<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <a href="{{ url('/specialization') }}">
            <button class="btn btn-primary">Create specializations</button>
        </a>
        <a href="{{ url('/skill') }}">
            <button class="btn btn-primary">Create skills</button>
        </a>
        @if ($allSpecifications->count() > 0 )
            <table class="table table-sm">
                <thead>
                <tr>
                <th>Specializations</th>
                <th>Skills</th>
                <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($allSpecifications as $specification)
                        <tr>
                            <td>
                                <p> {{ $specification->specialization_eng }}</p>
                                <p> {{ $specification->specialization_rus }}</p>
                                <p> {{ $specification->specialization_arm }}</p>
                            </td>
                            <td>
                                @foreach ($specification->skill as $skill)
                                    <div>
                                        {{ $skill->skill_eng }}
                                        {{ $skill->skill_rus }}
                                        {{ $skill->skill_arm }}
                                    </div>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ url('/delete/'.$specification->id) }}">
                                <button class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </body>
</html>
