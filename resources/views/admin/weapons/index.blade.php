@extends('layouts.app')
@section('content')
    <section class="container">
        <div>
            <h1 class="text-center py-3">Weapons</h1>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Type</th>
                        <th>Category</th>
                        <th>Weight</th>
                        <th>Cost</th>
                        <th>Damage Dice</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($weapons as $weapon)
                        <tr>
                            <td>{{ $weapon->name }}</td>
                            <td>{{ $weapon->slug }}</td>
                            <td>{{ $weapon->type }}</td>
                            <td>{{ $weapon->category }}</td>
                            <td>{{ $weapon->weight }}</td>
                            <td>{{ $weapon->cost }}</td>
                            <td>{{ $weapon->damage_dice }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </section>
@endsection
