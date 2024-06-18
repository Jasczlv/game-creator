<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Type;
use App\Models\Weapon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $weapons = Weapon::orderBy('name', 'asc')->get();


        return view('admin.characters.create', compact('types', 'weapons'));
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
            'type_id' => 'required|integer|exists:types,id',
            'weapon_ids' => 'nullable|exists:weapons,id'
        ]);

        $form_data = $request->all();

        if ($request->hasFile('image')) {

            $image_path = Storage::disk('public')->put('images', $request->image);

            $form_data['image'] = $image_path;
        };


        $new_character = Character::create($form_data);

        if ($request->has('weapon_ids')) {

            $new_character->weapons()->attach($form_data['weapon_ids']);
        }

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
        $weapons = Weapon::orderBy('name', 'asc')->get();



        return view('admin.characters.edit', compact('character', 'types', 'weapons'));
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
            'type_id' => 'required|integer|exists:types,id',
            'weapon_ids' => 'nullable|exists:weapons,id|array'
        ]);

        $form_data = $request->all();

        if ($request->has('weapon_ids')) {

            $character->weapons()->sync($form_data['weapon_ids']);
        } else {
            $character->weapons()->detach();
        }

        if ($request->hasFile('image')) {

            //salviamo il nuovo file inviato
            $image_path = Storage::disk('public')->put('images', $request->image);
            $form_data['image'] = $image_path;

            if ($character->image) {
                // eliminare il file $character->image
                Storage::disk('public')->delete($character->image);
            }
        }

        $character->update($form_data);
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
