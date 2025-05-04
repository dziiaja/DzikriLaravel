<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;


// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/echoteks', function () {
    echo('teks ini di tulis langsung di routes');
});

Route::get('/belajar', function () {
    return view('belajar');
});

Route::get('/controller', [SiswaController::class, 'index']);
Route::get('/produk', [SiswaController::class, 'index1']);
Route::get('/buku', [SiswaController::class, 'index2']);
Route::get('/siswa', [SiswaController::class, 'index4']); //menampilkan seluruh data DB t_siswa
Route::get('/kelas', [KelasController::class, 'index5']); //menampilkan seluruh data DB t_kelas
Route::get('/index6', [KelasController::class, 'index6']); //menampilkan data DB t_tugas bedasarkan nama walikelas huruf a
Route::get('/index7', [KelasController::class, 'index7']); //menampilkan data DB t_tugas bedasarkan jurusan dan nama_kelas NOTE : "ubah dulu codingan viewsnya"
Route::get('/index8', [KelasController::class, 'index8']); //menampilkan data DB t_tugas bedasarkan jurusan RPL saja
Route::get('/siswa/create', [SiswaController::class, 'create']); //
Route::post('/siswa', [SiswaController::class, 'store']); //
Route::get('/kelas/create', [KelasController::class, 'create']); //
Route::post('/siswa', [KelasController::class, 'store']); //




