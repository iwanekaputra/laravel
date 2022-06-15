<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;

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
	return view('landingpage.index');
});

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin');

Route::resource('admin/buku', BukuController::class)->middleware('auth');
Route::resource('admin/kategori', KategoriController::class)->middleware('auth');


