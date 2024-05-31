@extends('layouts.app')
@section('content')
    <section>
        <div>
            <h1>Home Page</h1>


            @foreach ($characters as $character)
                <p>
                    {{ $character->name }}
                </p>
            @endforeach


        </div>
    </section>
