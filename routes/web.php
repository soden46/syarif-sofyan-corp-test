<?php

use App\Http\Controllers\AnggotaController;
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
    return redirect()->route('anggota.index');
});

Route::resource('anggota', \App\Http\Controllers\AnggotaController::class);

// Route::controller(AnggotaController::class)->group(function () {
//     Route::get('/anggota', 'index')->name('anggota');
//     Route::get('/anggota/{id}', 'show');
//     Route::get('/anggota/create', 'create');
//     Route::post('/anggota/create', 'store');
//     Route::get('/anggota/{id}', 'edit');
//     Route::put('/anggota/{id}', 'update');
//     Route::delete('/anggota/{id}/delete', 'delete');
// });
