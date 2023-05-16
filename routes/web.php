<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('login', ['page' => 'login']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth', 'verified')->group(function () {
    Route::view('about', 'about')->name('about');
    Route::get('entri', [\App\Http\Controllers\FormController::class, 'index'])->name('form.index');
    //trial
    Route::get('entri-trial', [\App\Http\Controllers\FormController::class, 'entri'])->name('form.entri');
    // Route::resource('form', FormController::class);
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::post('simpanRuta', [\App\Http\Controllers\FormController::class, 'simpanRuta'])->name('form.store');
    Route::get('getKec/{id_kab}', [\App\Http\Controllers\FormController::class, 'getKec'])->name('form.getKec');
    Route::get('getDesa/{id_kec}', [\App\Http\Controllers\FormController::class, 'getDesa'])->name('form.getDesa');
    Route::get('getSls/{id_desa}', [\App\Http\Controllers\FormController::class, 'getSls'])->name('form.getSls');
});
