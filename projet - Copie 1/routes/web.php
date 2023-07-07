<?php

use App\Http\Controllers\ClientController;
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

Route::get('/',[ClientController::class,'index'])->name('walcome');
Route::get('/creation',[ClientController::class,'create'])->name('client.setting');
Route::get('/coach',[ClientController::class,'coaching'])->name('coach.setting');
Route::get('/materiel',[ClientController::class,'materiel'])->name('materiel.setting');
Route::get('/recherche/{id}/reservation',[ClientController::class,'recherche'])->name('recherche.setting');

Route::get('/images',[ClientController::class,'image'])->name('image.setting');
Route::post('/ajouter',[ClientController::class,'creer'])->name('ajouterclient.setting');
Route::post('/modifier',[ClientController::class,'modifier'])->name('modifclient.setting');

Route::post('/reserver',[ClientController::class,'reserver'])->name('reserver.setting');
Route::post('/ajoutercoach',[ClientController::class,'ajoutercoach'])->name('ajoutercoach.setting');
Route::post('/modifiercoach',[ClientController::class,'modifiercoach'])->name('modifiercoach.setting');
Route::post('/effacercoach',[ClientController::class,'deletecoach'])->name('effacercoach.setting');
Route::post('/effacerclient',[ClientController::class,'deleteclient'])->name('effacerclient.setting');

Route::get('/abonnement',[ClientController::class,'abonnement'])->name('abonnement.setting');

Route::get('/information/{id}/profilinformation',[ClientController::class,'information'])->name('information.setting');

Route::post('/validation',[ClientController::class,'validation'])->name('validation.setting');

Route::post('/ajoutmat',[ClientController::class,'addmateriel'])->name('addmateriel.setting');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
