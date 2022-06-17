<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminBukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminPeminjamanController;
use App\Models\Kategori;


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

// Route::get('/', function () {
//     return view('layout.index');
// });
// Route::get('/', function () {
//     return view('admin.index');
// });


// halaman landing page
Route::get('/', function () {
	$kategoris = Kategori::latest()->get();
	return view('landingpage.partials.home', compact('kategoris'));
})->name('buku');


// menu halaman buku dan pinjam buku
Route::get('/buku', [BukuController::class, 'index']);
Route::post('/buku', [BukuController::class, 'store']);


// menu auth user
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// route login
Route::get('/login', function () {
	$kategoris = Kategori::latest()->get();
	return view('login.login', compact('kategoris'));
});

// page admin 
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('admin')->name('admin');

// page buku yang dipinjam siswa
Route::get('/buku-dipinjam', [PeminjamController::class, 'index']);
Route::post('batal/{id}', [PeminjamController::class, 'destroy']);

// page admin di menu peminjam
Route::resource('admin/peminjam', AdminPeminjamanController::class)->middleware('auth');

// page admin pengelolaan buku
Route::resource('admin/buku', AdminBukuController::class)->middleware('admin');

// page admin pengelolaan kategori
Route::resource('admin/kategori', AdminKategoriController::class)->middleware('admin');

Route::get('refresh_captcha', [RegisterController::class, 'refreshCaptcha'])->name('refresh_captcha');



