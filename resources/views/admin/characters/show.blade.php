@extends('layouts.app')

@section('content')
    <div id="character_profile">


        <div class="container py-5">
            <div class="row">
                <div class="col-4 card py-2 rounded" id="character_portrait">
                    <div class="card-body">
                        <img class="mw-100"
                            src="https://i0.wp.com/nerdarchy.com/wp-content/uploads/2021/06/the-undead-warlock-5E-DD-van-richtens-guide-to-ravenloft.png?fit=800%2C1470&ssl=1"
                            alt="">
                    </div>
                    <div class="card-footer">
                        <div class="d-flex gap-2 justify-content-center">
                            <button class="btn btn-secondary">
                                <a href="{{ route('admin.characters.edit', $character) }}">Edit</a>
                            </button>
                            <form action="{{ route('admin.characters.destroy', $character) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger">Delete
                                </button>


                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-8 h-100">
                    <div class="card text-white" id="character_card">
                        <div class="card-header">
                            <h2 class="text-center">
                                <p>{{ $character->name }}</p>
                            </h2>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item bg-transparent text-white">
                                    <p><span class="fw-semibold">Class: </span>{{ $character->type->name }}</p>

                                </li>
                                <li class="list-group-item bg-transparent text-white">
                                    <p><span class="fw-semibold">Defence: </span>{{ $character->defence }} <i
                                            class="fa-solid fa-shield"></i> </p>

                                </li>
                                <li class="list-group-item bg-transparent text-white">

                                    <p><span class="fw-semibold">Speed: </span>{{ $character->speed }} <i
                                            class="fa-solid fa-bolt"></i></p>
                                </li>
                                <li class="list-group-item bg-transparent text-white">
                                    <p><span class="fw-semibold">Attack: </span>{{ $character->attack }} <i
                                            class="fa-solid fa-hand-fist"></i></p>

                                </li>
                                <li class="list-group-item bg-transparent text-white">
                                    <p><span class="fw-semibold">Hit Points: </span>{{ $character->life }} <i
                                            class="fa-solid fa-heart"></i></p>
                                </li>
                            </ul>
                            <em class="mt-5">"{{ $character->description }}"</em>
                        </div>

                        <div>
                            <h4 class="text-center">Weapons:</h4>
                            <ul class="list-unstyle">
                                @foreach ($character->weapons as $weapon)
                                    <li>
                                        <p>{{ $weapon->name }} x {{ $weapon->pivot->qty }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
