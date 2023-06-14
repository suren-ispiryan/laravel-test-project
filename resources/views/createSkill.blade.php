@include('header')
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
@include('footer')
