<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;

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

Route::get('/privada', function () {
    return view('privada');
})->middleware(['auth', 'verified'])->name('privada');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', function () {
    return view('auth.login');
});

//rutas
Route::middleware(['auth'])->group(function () {
    Route::resource('/client', ClientController::class);
    Route::view('/privada', 'secret')->name('privada');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::view('/login', 'auth.login')->name('login');
Route::view('/registro', 'register')->name('registro');
Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');


require __DIR__.'/auth.php';
