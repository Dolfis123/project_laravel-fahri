<?php

use App\Http\Controllers\mahassiswaController;
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
    return view('pages.welcome');
})->name('welcome');

Route::resource('/mahasiswa', mahassiswaController::class);
Route::post('/mahasiswa', [mahassiswaController::class, 'store'])->name('mahasiswa.store');