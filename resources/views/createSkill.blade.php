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
    <body class="antialiased p-5">
        <a href="{{ url('/') }}">
            <button class="btn btn-primary">Back</button>
        </a>

        @if ($specializations->count() > 0 )
            <form class="form" action="/create-skill" method="POST">
                @csrf
                <label for="cars">Choose a specialization:</label>
                <select name="specializations">
                    @foreach ($specializations as $specialization)
                        <option value={{ $specialization->id }}>{{ $specialization->specialization_eng }}</option>
                    @endforeach
                </select>

                <input
                    class="form-control inputs"
                    name="eng"
                    placeholder="Skill"
                />
                <input
                    class="form-control inputs"
                    name="rus"
                    placeholder="навык"
                />
                <input
                    class="form-control inputs"
                    name="arm"
                    placeholder="հմտություն"
                />
                <button
                    type="submit"
                    class="form-control btn btn-success"
                >
                    create
                </button>
            </form>
        @else
            <p>First create specialization</p>
        @endif
    </body>
</html>
