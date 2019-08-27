@extends ('layouts.app')

@section ('page_heading')
    Agility Test Results
@endsection

@section ('content')

    <div class="box">

        <table class="table is-striped is-hoverable">
            <thead>
            <tr>
                <th>Dog</th>
                <th>Breed</th>
                <th>Score</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($dogs as $d)

                <tr>
                    <td>{{ $d -> name }}</td>
                    <td>{{ $d -> breed }}</td>
                    <td>{{ $d -> score }}</td>
                    <td>{{ $d -> likes }}</td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
@endsection
