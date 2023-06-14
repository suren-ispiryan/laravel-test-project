@include('header')
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
        <form class="form" action="/create-specialization" method="POST">
            @csrf
            <input
                class="form-control inputs"
                name="eng"
                placeholder="Specialization"
            />
            <input
                class="form-control inputs"
                name="rus"
                placeholder="Специализация"
            />
            <input
                class="form-control inputs"
                name="arm"
                placeholder="Մասնագիտացում"
            />
            <button
                type="submit"
                class="form-control btn btn-success"
            >
                create
            </button>
        </form>
@include('footer')

