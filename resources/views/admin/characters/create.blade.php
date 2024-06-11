@extends('layouts.app')
@section('content')
    <main>
        <section>
            <div class="container">
                <h2 class="fs-2">Crea un personaggio</h2>
            </div>
            <div class="container">
                <form action="{{ route('admin.characters.store') }}" method="POST">

                    {{-- Cross Site Request Forgering --}}
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Giovanni</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nome">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Giovanni Sorrentino è un grande guerriero</label>
                        <input type="text" name="description" class="form-control" id="description"
                            placeholder="Descrizione">
                    </div>

                    <div class="mb-3">
                        <label for="attack" class="form-label">Attacco</label>
                        <input type="text" name="attack" class="form-control" id="attack" placeholder="max 40">
                    </div>

                    <div class="mb-3">
                        <label for="defence" class="form-label">Defence</label>
                        <input type="text" name="defence" class="form-control" id="defence" placeholder="max 40">
                    </div>

                    <div class="mb-3">
                        <label for="speed" class="form-label">Velocita'</label>
                        <input type="text" name="speed" class="form-control" id="speed" placeholder="max 40">
                    </div>

                    <div class="mb-3">
                        <label for="life" class="form-label">Punti HP</label>
                        <input type="text" name="life" class="form-control" id="life" placeholder="max 40">
                    </div>
                    
                    <div class="mb-3">
                        <select name="type_id" id="type_id">
                            @foreach ($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif



                    <button class="btn btn-primary">Crea</button>
                </form>
            </div>
        </section>
    </main>
@endsection
