@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">

            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="py-5" action="{{ route('admin.characters.update', $character) }}" method="POST">

                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome"
                        value="{{ $character->name }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" id="description" placeholder=""
                        value="{{ $character->description }}">
                </div>

                <div class="mb-3">
                    <label for="attack" class="form-label">Attack</label>
                    <input type="text" name="attack" class="form-control" id="attack" placeholder="Attacck"
                        value="{{ $character->attack }}">
                </div>

                <div class="mb-3">
                    <label for="defence" class="form-label">Defence</label>
                    <input type="text" name="defence" class="form-control" id="defence" placeholder="Difesa"
                        value="{{ $character->defence }}">
                </div>

                <div class="mb-3">
                    <label for="speed" class="form-label">Speed</label>
                    <input type="text" name="speed" class="form-control" id="speed" placeholder="Speed"
                        value="{{ $character->speed }}">
                </div>

                <div class="mb-3">
                    <label for="life" class="form-label">HP</label>
                    <input type="text" name="life" class="form-control" id="life" placeholder="HP"
                        value="{{ $character->life }}">
                </div>

                <div class="mb-3">
                    <select name="type_id" id="type_id">
                        @foreach ($types as $type)
                            <option @selected($type->id == old('type_id', $character->type_id)) value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <h3>Select your weapons</h3>
                    <div class="row">
                        @foreach ($weapons as $weapon)
                            <div class="col-2 border-end border-danger">
                                <input @checked(in_array($weapon->id, old('weapons', $character->weapons->pluck('id')->all()))) type="checkbox" value="{{ $weapon->id }}"
                                    name="weapon_ids[]">
                                <label for="{{ $weapon->name }}">{{ $weapon->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="d-flex justify-content-center py-4">
                    <button class="btn my-btn-edit">Update</button>
                </div>


            </form>
        </div>

    </div>
@endsection
