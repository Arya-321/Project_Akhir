<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controller\Tmpt_wisataController;
use App\Http\Controllers\RatingController;

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
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('index');
    //ini adalah route untuk pengunjung
    Route::get('pengunjung', [PengunjungController::class, 'index']);
    Route::get('/pengunjung/create', [PengunjungController::class, 'create']);
    Route::post('/pengunjung/store', [PengunjungController::class, 'store']);
    Route::get('/pengunjung/edit/{id}', [PengunjungController::class, 'edit']);
    Route::post('/pengunjung/update', [PengunjungController::class, 'update']);

    Route::get('tmpt_wisata', [Tmpt_wisataController::class, 'index']);
    Route::get('/tmpt_wisata/create', [Tmpt_wisataController::class, 'create']);
    Route::post('/tmpt_wisata/store', [Tmpt_wisataController::class, 'store']);
    Route::get('/tmpt_wisata/edit/{id}', [Tmpt_wisataController::class, 'edit']);
});
