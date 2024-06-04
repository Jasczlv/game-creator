<?php

use App\Http\Controllers\CharacterController as PublicCharacterController;
use App\Http\Controllers\Admin\CharacterController;
use App\Http\Controllers\PageController as PublicPageController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('characters', PublicCharacterController::class)->only(['index', 'show']);
Route::resource('weapons', PublicPageController::class)->only(['index']);

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        /* Weapons/Items routes */

        Route::get('/weapons', [PageController::class, 'index'])->name('weapons.index');

        /* *************************************************************** */

        /* Characters routes */

        Route::resource('characters', CharacterController::class);
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')
    ->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

require __DIR__ . '/auth.php';
