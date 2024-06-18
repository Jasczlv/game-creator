<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Weapon;
use Illuminate\Http\Request;

class WeaponsController extends Controller
{
    public function index(Request $request)
    {
        $weapons = Weapon::all();

        return response()->json([
            'success' => true,
            'weapons' => $weapons
        ]);
    }
}
