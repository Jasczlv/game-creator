@extends('layouts.app')
@section('content')
    <section>
        <div class="container py-3">
            <div class="row">
                <div class="col">
                    <h1>Home Page</h1>
                </div>
                <div class="col-auto">
                    <a href="{{route('admin.characters.create')}}">
                        <button class="btn btn-danger">New Character</button>
                    </a>
                </div>
            </div>


            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Attack</th>
                        <th>Defence</th>
                        <th>Speed</th>
                        <th>HP</th>

                        <th>
                            {{-- fill --}}
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($characters as $character)
                        <tr>

                            <td><a href="{{ route('admin.characters.show', $character) }}">{{ $character->name }}</a></td>
                            <td>{{ $character->description }}</td>
                            <td>{{ $character->attack }}</td>
                            <td>{{ $character->defence }}</td>
                            <td>{{ $character->speed }}</td>
                            <td>{{ $character->life }}</td>

                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.characters.edit', $character) }}">Edit</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-link link-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Trash
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Character</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            Are you sure to delete this character?
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('admin.characters.destroy', $character) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                            
                                                <button class="btn btn-link link-danger">Trash</button>
                            
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </td>





                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
@endsection
