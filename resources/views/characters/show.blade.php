@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="card">

            <h1>{{ $character->name }}</h1>
            <p>{{ $character->description }}</p>
            <p>{{ $character->attack }}</p>
            <p>{{ $character->defence }}</p>
            <p>{{ $character->speed }}</p>
            <p>{{ $character->life }}</p>

            @foreach ($character->weapons as $weapon)
                <p>{{$weapon->name}}</p>
            @endforeach
        </div>
    </div>
@endsection
