@extends('layouts.app')
@section('content')

    <main>
        <section>
            <div class="container">
                <p>characters.create</p>
                <h2 class="fs-2">Crea un personaggio</h2>
            </div>
            <div class="container">
                <form action="{{ route('characters.store') }}" method="POST">

                    {{-- Cross Site Request Forgering --}}
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Titolo del fumetto">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" name="description" class="form-control" id="description"
                            placeholder="Titolo del fumetto">
                    </div>

                    <div class="mb-3">
                        <label for="attack" class="form-label">Attacco</label>
                        <input type="text" name="attack" class="form-control" id="attack"
                            placeholder="Titolo del fumetto">
                    </div>

                    <div class="mb-3">
                        <label for="defence" class="form-label">Defence</label>
                        <input type="text" name="defence" class="form-control" id="defence" placeholder="http://...">
                    </div>

                    <div class="mb-3">
                        <label for="speed" class="form-label">Velocita'</label>
                        <input type="text" name="speed" class="form-control" id="speed" placeholder="novel book">
                    </div>

                    <div class="mb-3">
                        <label for="life" class="form-label">Punti HP</label>
                        <input type="text" name="life" class="form-control" id="life" placeholder="Name">
                    </div>



                    <button class="btn btn-primary">Crea</button>
                </form>
            </div>
        </section>
    </main>
