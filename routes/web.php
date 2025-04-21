<?php

use App\Http\Controllers\MaterialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KebutuhanController;
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

Route::resource('/', HomeController::class);
Route::resource('/mysqldb', MaterialController::class);
Route::resource('/sheet', SheetDbController::class);
Route::get('/kebutuhan', [KebutuhanController::class, 'index'])->name('kebutuhan.index');
Route::get('/kebutuhan/bixie', [KebutuhanController::class, 'updateBixie'])->name('kebutuhan.bixie');
Route::get('/kebutuhan/katalor', [KebutuhanController::class, 'updateKatalor'])->name('kebutuhan.katalor');
Route::post('/kebutuhan/update', [KebutuhanController::class, 'update'])->name('kebutuhan.update');
Route::get('material/search', [SearchController::class, 'search'])->name('material.search');
Route::get('material/{id}/detail', [SearchController::class, 'detail'])->name('material.detail');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
