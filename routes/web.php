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
    
    //route get Filter
    Route::get('getKec/{id_kab}', [\App\Http\Controllers\FormController::class, 'getKec'])->name('form.getKec');
    Route::get('getDesa/{id_kec}', [\App\Http\Controllers\FormController::class, 'getDesa'])->name('form.getDesa');
    Route::get('getSls/{id_desa}', [\App\Http\Controllers\FormController::class, 'getSls'])->name('form.getSls');
    
    //RT
    Route::get('getRt/{id_sls}', [\App\Http\Controllers\FormController::class, 'getRt'])->name('form.getRt');
    Route::get('getRtById/{id}', [\App\Http\Controllers\FormController::class, 'getRtById'])->name('form.getRtById');
    Route::post('simpanRuta', [\App\Http\Controllers\FormController::class, 'simpanRuta'])->name('form.store');
    
    // Route::post('simpanLahan', [\App\Http\Controllers\FormController::class, 'simpanLahan'])->name('form.simpanLahan');
    
    //Pengelola
    Route::get('getPengelola/{id_rt}', [\App\Http\Controllers\FormController::class, 'getPengelola'])->name('form.getPengelola');
    Route::get('getPengelolaById/{id}', [\App\Http\Controllers\FormController::class, 'getPengelolaById'])->name('form.getPengelolaById');
    Route::post('simpanPengelola', [\App\Http\Controllers\FormController::class, 'simpanPengelola'])->name('form.simpanPengelola');
    Route::delete('pengelola/delete', [\App\Http\Controllers\FormController::class, 'deletePengelola'])->name('form.deletePengelola');
    
    //Lahan
    Route::get('getLahan/{id_pengelola}', [\App\Http\Controllers\FormController::class, 'getLahan'])->name('form.getLahan');
    Route::post('lahan/save', [\App\Http\Controllers\FormController::class, 'simpanLahan'])->name('form.simpanLahan');
    Route::delete('lahan/delete', [\App\Http\Controllers\FormController::class, 'deleteLahan'])->name('form.deleteLahan');
    
    //TERNAK
    //Domba
    Route::get('getDomba/{id_pengelola}', [\App\Http\Controllers\FormController::class, 'getDomba'])->name('form.getDomba');
    Route::post('domba/save', [\App\Http\Controllers\FormController::class, 'simpanDomba'])->name('form.simpanDomba');
    Route::delete('domba/delete', [\App\Http\Controllers\FormController::class, 'deleteDomba'])->name('form.deleteDomba');
    
    //Kerbau
    Route::get('getKerbau/{id_pengelola}', [\App\Http\Controllers\FormController::class, 'getKerbau'])->name('form.getKerbau');
    Route::post('kerbau/save', [\App\Http\Controllers\FormController::class, 'simpanKerbau'])->name('form.simpanKerbau');
    Route::delete('kerbau/delete', [\App\Http\Controllers\FormController::class, 'deleteKerbau'])->name('form.deleteKerbau');
    
    //Unggas
    Route::get('getUnggas/{id_pengelola}', [\App\Http\Controllers\FormController::class, 'getUnggas'])->name('form.getUnggas');
    Route::post('unggas/save', [\App\Http\Controllers\FormController::class, 'simpanUnggas'])->name('form.simpanUnggas');
    Route::delete('unggas/delete', [\App\Http\Controllers\FormController::class, 'deleteUnggas'])->name('form.deleteUnggas');
    
    //TLainnya
    Route::get('getTlainnya/{id_pengelola}', [\App\Http\Controllers\FormController::class, 'getTlainnya'])->name('form.getTlainnya');
    Route::post('tlainnya/save', [\App\Http\Controllers\FormController::class, 'simpanTlainnya'])->name('form.simpanTlainnya');
    Route::delete('tlainnya/delete', [\App\Http\Controllers\FormController::class, 'deleteTlainnya'])->name('form.deleteTlainnya');
});
