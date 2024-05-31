@extends('layouts.app')
@section('content')
    <h1>
        CIAO
    </h1>
    @foreach ($characters as $character) 

    <p>{{$character->name}}</p>

    @endforeach
@endsection
