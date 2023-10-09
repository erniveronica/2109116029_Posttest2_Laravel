<?php

use App\Http\Controllers\admin\BahanBakuController;
use App\Http\Controllers\user\ReviewController;
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

// BAGIAN USE
// Beranda
Route::get('/', function () {
    return view('user.home');
});

// Tentang
Route::get('/tentang', function () {
    return view('user.about');
});

// Menu
Route::get('/menu', function () {
    return view('user.menus');
});

// BAGIAN ADMIN
Route::get('/admin', function () {
    return view('admin.home');
});

// Tentang
Route::get('/admin/tentang', function () {
    return view('admin.about');
});

// Menu
Route::get('/admin/menu', function () {
    return view('admin.menus');
});

// BAGIAN USER ---> REVIEW
Route::prefix('ulasan')->group(function () {
    Route::get('/', [ReviewController::class, 'index']); // Menampilkan daftar ulasan
    Route::get('/create', [ReviewController::class, 'create']); // Menampilkan form ulasan
    Route::post('/store', [ReviewController::class, 'store']); // Menyimpan ulasan baru
});

// BAGIAN ADMIN --> BAHAN BAKU


// Route::get('/admin',[BahanBakuController::class,'index']);
Route::prefix('bahan_baku')->group(function () {
    Route::get('/', [BahanBakuController::class, 'index']); // Menampilkan daftar bahan baku
    Route::get('/create', [BahanBakuController::class, 'create']); // Menampilkan form bahan baku
    Route::post('/store', [BahanBakuController::class, 'store']); // Menampilkan bahan baku baru
});
