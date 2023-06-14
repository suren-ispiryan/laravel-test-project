@include('header')
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
    @include('footer')
