<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/', [PostController::class,'listes'])->name('liste.devinette');
Route::get('/liste', [PostController::class,'listes'])->name('liste.devinette');
Route::get('/add/creer', [PostController::class,'ajouter'])->name('ajout.text');
Route::post('/add/creer', [PostController::class,'verifier'])->name('ajout.verif');

Route::get('/edit/{id}', [PostController::class,'modif'])->name('edit.text');
Route::post('/edit/', [PostController::class,'modifverif'])->name('edit.verif');







