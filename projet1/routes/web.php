<?php

use App\Http\Controllers\PostController;
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

Route::get('/',[PostController::class,'index'])->name('walcome');
Route::get('/creation',[PostController::class,'create'])->name('client.setting');
Route::get('/coach',[PostController::class,'coaching'])->name('coach.setting');
Route::get('/materiel',[PostController::class,'materiel'])->name('materiel.setting');
Route::get('/recherche/{id}/ajout',[PostController::class,'recherche'])->name('recherche.setting');

Route::get('/images',[PostController::class,'image'])->name('image.setting');
Route::post('/ajouter',[PostController::class,'creer'])->name('ajouterclient.setting');
Route::post('/modifier',[PostController::class,'modifier'])->name('modifclient.setting');

Route::post('/reserver',[PostController::class,'reserver'])->name('reserver.setting');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
