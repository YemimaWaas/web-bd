<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BeritaController;
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
    return view('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



// Route::get('/info-magang', function () {
//     return view('info-magang');
// })->name('info-magang');

Route::get('/alur', function () {
    return view('alur');
})->name('alur');

Route::get('/tentang', function () {return view('profil-bd.tentang-bd');})->name('tentang-bd');
Route::get('/dosen', function () {return view('profil-bd.profil-dosen');})->name('profil-dosen');
Route::get('/lulusan', function () {return view('profil-bd.profil-lulusan');})->name('profil-lulusan');
Route::get('/prestasi', function () {return view('profil-bd.prestasi');})->name('prestasi');
Route::get('/berita', 'App\Http\Controllers\AppController@berita')->name('berita');
Route::get('/galerry', function () {return view('gallery');})->name('gallery');





// admin
Route::get('redirects', 'App\Http\Controllers\AdminController@index');


Route::get('/magang', [MagangController::class, 'index'])->name('magang')->middleware('auth');
Route::get('/magang/create', [MagangController::class, 'create'])->name('magang.create')->middleware('auth');
Route::post('/magang/store', [MagangController::class, 'store'])->name('magang.store')->middleware('auth');
Route::get('/magang/edit/{id}', [MagangController::class, 'edit'])->name('magang.edit')->middleware('auth');
Route::post('/magang/update/{id}', [MagangController::class, 'update'])->name('magang.update')->middleware('auth');
Route::delete('/magang/destroy/{id}', [MagangController::class, 'destroy'])->name('magang.destroy')->middleware('auth');

// Contoh route di web.php
Route::get('/info-magang', 'App\Http\Controllers\AppController@magang')->name('info.magang');

Route::get('/detail/{slug}', [AppController::class, 'detail'])->name('detail.magang');

Route::get('/berita-2', [BeritaController::class, 'index'])->name('berita2')->middleware('auth');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create')->middleware('auth');
Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store')->middleware('auth');
Route::get('/berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit')->middleware('auth');
Route::post('/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update')->middleware('auth');
Route::delete('/berita/destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy')->middleware('auth');
Route::get('/selengkapnya/{slug}', [AppController::class, 'detail-berita'])->name('selengkapnya.berita');

Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('auth');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create')->middleware('auth');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store')->middleware('auth');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update')->middleware('auth');
Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('auth');



