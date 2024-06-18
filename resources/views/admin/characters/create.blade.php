@extends('layouts.app')
@section('content')
    <main>
        <section>
            <div class="container">
                <h2 class="fs-2">Create a new character</h2>
            </div>
            <div class="container">

                @if ($errors->any())
                    <div class="alert
                                    alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.characters.store') }}" method="POST" enctype="multipart/form-data">

                    {{-- Cross Site Request Forgering --}}
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Character Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nome">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Character image</label>
                        <input class="form-control" type="file" id="image" name="image">
                      </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Character description</label>
                        <input type="text" name="description" class="form-control" id="description"
                            placeholder="Descrizione">
                    </div>

                    <div class="mb-3">
                        <label for="attack" class="form-label">Attack</label>
                        <input type="text" name="attack" class="form-control" id="attack" placeholder="max 40">
                    </div>

                    <div class="mb-3">
                        <label for="defence" class="form-label">Defence</label>
                        <input type="text" name="defence" class="form-control" id="defence" placeholder="max 40">
                    </div>

                    <div class="mb-3">
                        <label for="speed" class="form-label">Speed</label>
                        <input type="text" name="speed" class="form-control" id="speed" placeholder="max 40">
                    </div>

                    <div class="mb-3">
                        <label for="life" class="form-label">HP</label>
                        <input type="text" name="life" class="form-control" id="life" placeholder="max 40">
                    </div>

                    <div class="mb-3">
                        <select name="type_id" id="type_id">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <h3>Select your weapons</h3>
                        <div class="row">
                            @foreach ($weapons as $weapon)
                                <div class="col-2 border-end border-danger">
                                    <input type="checkbox" value="{{ $weapon->id }}" name="weapon_ids[]">
                                    <label for="{{ $weapon->name }}">{{ $weapon->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>




                    <button class="btn btn-danger">Crea</button>
                </form>
            </div>
        </section>
    </main>
@endsection
