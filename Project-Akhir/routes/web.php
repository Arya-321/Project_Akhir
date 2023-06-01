<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengunjungController;

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
    Alert::success('Selamat Datang');
    return view('welcome');
});
Route::prefix('admin')->group(function(){
Route::get('dashboard',[DashboardController::class, 'index'])->name('index');
//ini adalah route untuk pengunjung
Route::get('pengunjung', [PengunjungController::class, 'index']);
Route::get('/pengunjung/create', [PengunjungController::class, 'create']);
Route::post('/pengunjung/store', [PengunjungController::class, 'store']);
Route::get('/pengunjung/edit/{id}', [PengunjungController::class, 'edit']);
Route::post('/pengunjung/update', [PengunjungController::class, 'update']);
Route::get('/pengunjung/show/{id}', [PengunjungController::class, 'show']);
Route::get('/pengunjung/delete/{id}', [PengunjungController::class, 'destroy']);
});
