<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Weapon;

class PageController extends Controller
{
    public function index()
    {
        $weapons = Weapon::all();
        return view('admin.weapons.index', compact('weapons'));
    }
}
