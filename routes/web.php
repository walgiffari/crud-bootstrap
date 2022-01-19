<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PegawaiController::class, 'index'])->name('index');
Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('edit');
Route::post('/edit/store', [PegawaiController::class, 'edit_store'])->name('edit_store');
