@extends('layout.app')

@section('content')
<form action="{{route('character.update', $character)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="contenitore-input">
        <label for="name" >Nome</label>
        <input type="text" name="name" id="name" value="{{$character->name}}">
    </div>

    <div class="contenitore-input">
        <label for="description" >Descrizione</label>
        <textarea  name="description" id="description">{{$character->description}}</textarea>
    </div>

    <div class="container-input">
        <label for="attack" >Attacco</label>
        <input type="text" name="attack" id="attack" value="{{$character->attack}}">
    </div>

    <div class="container-input">
        <label for="defence" >Difesa</label>
        <input type="text" name="defence" id="defence" value="{{$character->defence}}">
    </div>

    <div class="container-input">
        <label for="speed" >Velocità</label>
        <input type="text" name="speed" id="speed" value="{{$character->speed}}">
    </div>

    <div class="container-input">
        <label for="life" >Vita</label>
        <input type="text" name="life" id="life" value="{{$character->life}}">
    </div>

   
    <button>Modifica</button>
</form>
@endsection