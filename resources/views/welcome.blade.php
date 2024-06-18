@extends('layouts.app')

@section('content')
<main id="home_main" class="vh-100">

    <h1 class="container p-4 text-center text-white display-1"><strong>Dungeons & Dragons</strong></h1>

    <div class="container text-white d-flex rounded p-3" id="home_bg">
        <div class="d-flex flex-column col-6 align-items-center">
            <p class="display-5"><strong>Check out our characters!</strong></p>
            <a href="{{route('admin.characters.index')}}">
                <i style="font-size: 50px" class="fa-solid fa-people-group"></i>
            </a>
        </div>
        <div class="d-flex flex-column col-6 align-items-center">
            <p class="display-5"><strong>Check out our weapons!</strong></p>
            <a class="" href="{{route('admin.weapons.index')}}">
                <i style="font-size: 50px" class="fa-solid fa-wand-sparkles"></i>
            </a>
        </div>
    </div>
</main>

@endsection