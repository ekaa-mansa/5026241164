<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});
Route::get('blog', function () {
	return view('blog');
});
Route::get('pert5', function () {
	return view('pertemuan5');
});

// Hands On Pertemuan 8 - Dosen controller tanpa parameter
Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

// Hands On Pertemuan 9 - Pegawai controller
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// Hands On Pertemuan 9 - BlogController
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pert1', function () {
    return view('intro');
});
Route::get('/pert2', function () {
    return view('news');
});
Route::get('/pert2(1)', function () {
    return view('news1');
});
Route::get('/pert3', function () {
    return view('template');
});
Route::get('/pert3(1)', function () {
    return view('responsive');
});
Route::get('/pert4', function () {
    return view('5026241164');
});
Route::get('/pert5(1)', function () {
    return view('index');
});
Route::get('/pert5(2)', function () {
    return view('linktree');
});
