<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weapon;

class PageController extends Controller
{
    public function index()
    {
        $weapons = Weapon::all();
        return view('home', compact('weapons'));
    }
}
