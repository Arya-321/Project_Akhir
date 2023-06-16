<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Models\Ulasan;

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
    Route::post('/pengunjung/importexcel', [PengunjungController::class, 'importexcel']);
    
    Route::get('/wisata', [WisataController::class, 'index' ]);
    Route::get('/wisata/create', [WisataController::class, 'create']);
    Route::post('/wisata/store', [WisataController::class, 'store']);
    Route::get('/wisata/edit/{id}', [WisataController::class, 'edit']);
    Route::post('/wisata/update', [WisataController::class, 'update']);
    Route::get('/wisata/show/{id}', [WisataController::class, 'show']);
    Route::get('/wisata/delete/{id}', [WisataController::class, 'destroy']);
    Route::get('/wisata/wisataPDF', [WisataController::class, 'wisataPDF']);
    
    Route::get('/ulasan', [UlasanController::class, 'index']);
    Route::get('ulasan/create', [UlasanController::class, 'create']);
    Route::post('/ulasan/store', [UlasanController::class, 'store']);
    Route::get('/ulasan/edit/{id}', [UlasanController::class,'edit']);
    Route::post('/ulasan/update', [UlasanController::class, 'update']);
    Route::get('/ulasan/show/{id}', [UlasanController::class, 'show']);
    Route::get('/ulasan/delete/{id}', [UlasanController::class,'destroy']);
    Route::get('/ulasan/ulasanPDF', [UlasanController::class, 'ulasanPDF']);
    Route::get('/ulasan/exportexcel/', [UlasanController::class, 'exportExcel']);
    Route::post('/ulasan/importexcel', [UlasanController::class, 'importexcel']);
    
    Route::get('/rating', [RatingController::class, 'index']);
    Route::get('rating/create', [RatingController::class, 'create']);
    Route::post('/rating/store', [RatingController::class, 'store']);
    Route::get('/rating/edit/{id}', [RatingController::class,'edit']);
    Route::post('/rating/update', [RatingController::class, 'update']);
    Route::get('/rating/show/{id}', [RatingController::class, 'show']);
    Route::get('/rating/delete/{id}', [RatingController::class,'destroy']);
    Route::get('/rating/ratingPDF', [RatingController::class, 'ratingPDF']);
    Route::get('/rating/exportexcel/', [RatingController::class, 'exportExcel']);
    Route::post('/rating/importexcel', [RatingController::class, 'importexcel']);
    
    //ini adalah route untuk user
    Route::get('/user', [UserController::class, 'index']);
    });
    });
    
    Route::prefix('frontend')->group(function(){
        Route::get('home',[PagesController::class, 'home'])->name('home');
        Route::get('about',[PagesController::class, 'about'])->name('about');
        Route::get('trips',[PagesController::class, 'trips'])->name('trips');
        Route::get('rating',[PagesController::class, 'rating'])->name('rating');
        Route::get('ulasan',[PagesController::class, 'ulasan'])->name('ulasan');
        Route::get('home_detail/{id}',[PagesController::class,'home_detail'])->name('home_detail');
        Route::get('/pages/home/{id}', [IndexController::class, 'home']);
        
    
    });
    Auth::routes();

    Route::get('/after_register', function(){
        return view ('after_register');
    });
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    // Route::get('/', function () {
    //     return view('frontend.index');
    // });
    