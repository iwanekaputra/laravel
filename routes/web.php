<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminBukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
	$kategoris = Kategori::latest()->get();
	return view('landingpage.home', compact('kategoris'));
})->name('buku');

Route::get('/buku', [BukuController::class, 'index']);
Route::post('/buku', [BukuController::class, 'store']);



Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('admin')->name('admin');

Route::resource('admin/peminjam', AdminPeminjamanController::class)->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


Route::resource('admin/buku', AdminBukuController::class)->middleware('admin');
Route::resource('admin/kategori', AdminKategoriController::class)->middleware('admin');


