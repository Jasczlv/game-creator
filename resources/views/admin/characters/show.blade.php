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

            @foreach ($character->weapons as $weapon)
                <p>{{$weapon->name}}</p>
            @endforeach
        </div>
    </div>
@endsection
