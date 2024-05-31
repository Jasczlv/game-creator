<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $character = Character::all();

        return view('characters.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        //Ianis

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        //Ianis
    }

    /**
     * Display the specified resource.
     */
    public function show(string $character)
    {
        //ricky
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $character)
    {
        //ricky
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $character)
    {
        // Enrico
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $character)
    {
        // Enrico
    }
}
