<?php

use App\Http\Controllers\Api\CharacterController;
use App\Http\Controllers\Api\WeaponsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/characters', [CharacterController::class, 'index']);

Route::get('/characters/{character:slug}', [CharacterController::class, 'show']);

Route::get('/weapons', [WeaponsController::class, 'index']);
