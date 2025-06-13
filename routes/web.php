<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KebutuhanController;
use App\Http\Controllers\KedatanganController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SheetDbController;
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

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/materialgd', MaterialController::class);
    Route::resource('/sheet', SheetDbController::class);
    Route::resource('/kebutuhan', KebutuhanController::class);
    Route::get('/kedatangan', [KedatanganController::class, 'index'])->name('kedatangan.index');
    Route::get('/kedatangan/{vendor}', [KedatanganController::class, 'create'])->name('kedatangan.create');
    Route::patch('/kedatangan/update', [KedatanganController::class, 'update'])->name('kedatangan.update');
    Route::get('material/search', [SearchController::class, 'search'])->name('material.search');
    Route::get('material/{id}/detail', [SearchController::class, 'detail'])->name('material.detail');
    Route::get('history', [HistoryController::class, 'index'])->name('history.index');
    Route::get('pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');
    Route::patch('pengaturan', [PengaturanController::class, 'update'])->name('pengaturan.update');
    Route::delete('pengaturan', [PengaturanController::class, 'destroy'])->name('pengaturan.destroy');
    Route::resource('pengguna', PenggunaController::class);
    Route::post('reset-password/{nip}', [PenggunaController::class, 'resetPassword'])->name('reset.password');
});

require __DIR__.'/auth.php';
