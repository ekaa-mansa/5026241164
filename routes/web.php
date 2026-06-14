<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BusController;



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
Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//Pertemuan 11
Route::get('/pegawai', [PegawaiDBController::class, 'index1']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

// Hands On Pertemuan 9 - BlogController
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index1']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

//CRUD Latihan EAS MHS Perempuan
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliahtambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliahsimpan', [NilaiKuliahController::class, 'simpan']);

//CRUD Latihan EAS MHS Laki-Laki
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanjatambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanjasimpan', [KeranjangBelanjaController::class, 'simpan']);
Route::get('/keranjangbelanja/hapus/{id}', [KeranjangBelanjaController::class, 'hapus']);

//CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//Pra-EAS
Route::get('/bus', [BusController::class, 'index']);
Route::get('/bustambah', [BusController::class, 'tambah']);
Route::post('/bussimpan', [BusController::class, 'simpan']);
Route::get('/bushapus/{id}', [BusController::class, 'hapus']);


Route::get('/EAS', function () {
    return view('templatefix');
});

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
