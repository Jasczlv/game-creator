@extends('layouts.app')
@section('content')
    <section>
        <div>
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

                            <td>{{ $character->name }}</td>
                            <td>{{ $character->description }}</td>
                            <td>{{ $character->attack }}</td>
                            <td>{{ $character->defence }}</td>
                            <td>{{ $character->speed }}</td>
                            <td>{{ $character->life }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('characters.edit', $character) }}">Edit</a>
                                    <form action="{{ route('characters.destroy', $character) }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn btn-link link-danger">Trash</button>

                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </section>
