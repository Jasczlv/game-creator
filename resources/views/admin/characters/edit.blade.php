@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <form class="col-5 py-5" action="{{ route('admin.characters.update', $character) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome"
                        value="{{ $character->name }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" name="description" class="form-control" id="description" placeholder=""
                        value="{{ $character->description }}">
                </div>

                <div class="mb-3">
                    <label for="attack" class="form-label">Attacco</label>
                    <input type="text" name="attack" class="form-control" id="attack" placeholder="Attacck"
                        value="{{ $character->attack }}">
                </div>

                <div class="mb-3">
                    <label for="defence" class="form-label">Difesa</label>
                    <input type="text" name="defence" class="form-control" id="defence" placeholder="Difesa"
                        value="{{ $character->defence }}">
                </div>

                <div class="mb-3">
                    <label for="speed" class="form-label">Velocità</label>
                    <input type="text" name="speed" class="form-control" id="speed" placeholder="Speed"
                        value="{{ $character->speed }}">
                </div>

                <div class="mb-3">
                    <label for="life" class="form-label">HP</label>
                    <input type="text" name="life" class="form-control" id="life" placeholder="HP"
                        value="{{ $character->life }}">
                </div>
                <div class="d-flex justify-content-center py-4">
                    <button class="btn my-btn-edit">Update</button>
                </div>
            </form>
        </div>

    </div>
@endsection
