<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Type;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $characters = Character::all();

        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::orderBy('name', 'asc')->get();


        return view('admin.characters.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|max:200|string',
            'description' => 'nullable|string',
            'attack' => 'required|integer',
            'defence' => 'required|integer',
            'speed' => 'required|integer',
            'life' => 'required|integer',
            'type_id' => 'required|integer|exists:types,id'
        ]);

        $form_data = $request->all();

        $new_character = Character::create($form_data);
        return to_route('admin.characters.show', $new_character);
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        //

        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        $types = Type::orderBy('name', 'asc')->get();



        return view('admin.characters.edit', compact('character', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $character)
    {

        $request->validate([
            'name' => 'required|max:200|string',
            'description' => 'nullable|string',
            'attack' => 'required|integer',
            'defence' => 'required|integer',
            'speed' => 'required|integer',
            'life' => 'required|integer',
            'type_id' => 'required|integer|exists:types,id'
        ]);

        $form_data = $request->all();

        $character->fill($form_data);
        $character->save();
        // $character->update($form_data);

        return to_route('admin.characters.show', $character);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {


        $character->delete();
        return to_route('admin.characters.index');
    }
}
