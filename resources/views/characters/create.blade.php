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
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" name="series" class="form-control" id="series"
                            placeholder="Titolo del fumetto">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" name="sale_date" class="form-control" id="sale_date"
                            placeholder="Titolo del fumetto">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Url Image</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://...">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="novel book">
                    </div>

                    <div class="mb-3">
                        <label for="writers" class="form-label">Scrittore</label>
                        <input type="text" name="writers" class="form-control" id="writers" placeholder="Name">
                    </div>

                    <div class="mb-3">
                        <label for="artists" class="form-label">Artista</label>
                        <input type="text" name="artists" class="form-control" id="artists" placeholder="Name">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="$1.00">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione del fumetto"></textarea>
                    </div>

                    <button class="btn btn-primary">Crea</button>
                </form>
            </div>
        </section>
    </main>
