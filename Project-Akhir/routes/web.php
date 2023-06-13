<?php

use App\Exports\PengunjungExport;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\UserController;

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
// Route::prefix('admin')->group(function(){
    Route::group(['middleware' => ['auth', 'peran:admin']], function() {
        Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboard',[DashboardController::class, 'index'])->name('index');

Route::get('/pengunjung', [PengunjungController::class, 'index' ]);
Route::get('/pengunjung/create', [PengunjungController::class, 'create']);
Route::post('/pengunjung/store', [PengunjungController::class, 'store']);
Route::get('/pengunjung/edit/{id}', [PengunjungController::class, 'edit']);
Route::post('/pengunjung/update', [PengunjungController::class, 'update']);
Route::get('/pengunjung/show/{id}', [PengunjungController::class, 'show']);
Route::get('/pengunjung/delete/{id}', [PengunjungController::class, 'destroy']);
Route::get('/generate-pdf', [PengunjungController::class, 'generatePDF']);
Route::get('/pengunjung/pengunjungPDF', [PengunjungController::class, 'pengunjungPDF']);
Route::get('/pengunjung/exportexcel/', [PengunjungController::class, 'exportExcel']);
Route::post('/pengunjung/importexcel', [PengunjungController::class, 'importExcel']);
//ini adalah route untuk user
Route::get('/user', [UserController::class, 'index']);
});
});


Route::prefix('user')->group(function(){
    Route::get('dashboarduser',[DashboardUserController::class, 'index'])->name('index');

    Route::get('/pengunjung', [PengunjungController::class, 'index' ]);
    Route::get('/pengunjung/edit/{id}', [PengunjungController::class, 'edit']);
    Route::post('/pengunjung/update', [PengunjungController::class, 'update']);
    Route::get('/pengunjung/show/{id}', [PengunjungController::class, 'show']);
});

Auth::routes();

Route::get('/after_register', function(){
    return view ('after_register');
});

// Route::get('/acces_denied2', function(){
//     return view ('admin/acces_denied2');
// });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
