@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <h1>Home Page</h1>


            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Attack</th>
                        <th>Defence</th>
                        <th>Speed</th>
                        <th>HP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($characters as $character)
                        <tr>

                            <td><a href="{{ route('characters.show', $character) }}">{{ $character->name }}</a></td>
                            <td>{{ $character->description }}</td>
                            <td>{{ $character->attack }}</td>
                            <td>{{ $character->defence }}</td>
                            <td>{{ $character->speed }}</td>
                            <td>{{ $character->life }}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </section>
@endsection
