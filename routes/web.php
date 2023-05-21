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
    Route::post('simpanUup', [\App\Http\Controllers\FormController::class, 'simpanUup'])->name('form.store');
    Route::post('simpanPengelola', [\App\Http\Controllers\FormController::class, 'simpanPengelola'])->name('form.store');

    //route get Disaster
    Route::get('getKec/{id_kab}', [\App\Http\Controllers\FormController::class, 'getKec'])->name('form.getKec');
    Route::get('getDesa/{id_kec}', [\App\Http\Controllers\FormController::class, 'getDesa'])->name('form.getDesa');
    Route::get('getSls/{id_desa}', [\App\Http\Controllers\FormController::class, 'getSls'])->name('form.getSls');
    Route::get('getRt/{id_sls}', [\App\Http\Controllers\FormController::class, 'getRt'])->name('form.getRt');

    Route::get('getRt/{id_sls}', [\App\Http\Controllers\FormController::class, 'getRt'])->name('form.getRt');
    Route::get('getRtById/{id}', [\App\Http\Controllers\FormController::class, 'getRtById'])->name('form.getRtById');
    Route::get('getUupByRt/{id_rt}', [\App\Http\Controllers\FormController::class, 'getUupByRt'])->name('form.getUupByRt');
    Route::get('getUupById/{id}', [\App\Http\Controllers\FormController::class, 'getUupById'])->name('form.getUupById');
    Route::get('getPengelola/{id_uup}', [\App\Http\Controllers\FormController::class, 'getPengelola'])->name('form.getPengelola');
});
