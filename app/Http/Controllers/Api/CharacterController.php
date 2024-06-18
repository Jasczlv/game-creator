<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(Request $request)
    {
        $per_page = $request->perPage ?? 10;
        $characters = Character::with('type', 'weapons')->paginate($per_page);

        return response()->json([
            'success' => true,
            'characters' => $characters
        ]);
    }

    public function show(Character $character)
    {
        $character->load('type', 'weapons');

        return response()->json([
            'character' => $character
        ]);
    }
}
