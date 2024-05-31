@extends('layout.app')

@section('content')
    <div>
        <p>{{$character->name}}</p>
        <p>{{$character->description}}</p>
        <p>{{$character->attack}}</p>
        <p>{{$character->defence}}</p>
        <p>{{$character->speed}}</p>
        <p>{{$character->life}}</p>
    </div>
@endsection