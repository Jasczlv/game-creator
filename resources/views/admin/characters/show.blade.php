@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <p>{{ $character->name }}</p>
            <p>{{ $character->description }}</p>
            <p>{{ $character->attack }}</p>
            <p>{{ $character->defence }}</p>
            <p>{{ $character->speed }}</p>
            <p>{{ $character->life }}</p>
            <p>class: {{$character->type->name}}</p>

            @foreach ($character->weapons as $weapon)
                <p>{{$weapon->name}}</p>
            @endforeach
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.characters.edit', $character) }}">Edit</a>
            <form action="{{ route('admin.characters.destroy', $character) }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-link link-danger">Trash</button>

            </form>
        </div>
    </div>
@endsection
