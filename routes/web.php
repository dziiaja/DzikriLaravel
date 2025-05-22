<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
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
Route::get('/siswa', [SiswaController::class, 'eloquent']); //menampilkan seluruh data DB t_siswa
Route::get('/kelas', [KelasController::class, 'index5']); //menampilkan seluruh data DB t_kelas
Route::get('/index6', [KelasController::class, 'index6']); //menampilkan data DB t_tugas bedasarkan nama walikelas huruf a
Route::get('/index7', [KelasController::class, 'index7']); //menampilkan data DB t_tugas bedasarkan jurusan dan nama_kelas NOTE : "ubah dulu codingan viewsnya"
Route::get('/index8', [KelasController::class, 'index8']); //menampilkan data DB t_tugas bedasarkan jurusan RPL saja
Route::get('/siswa/create', [SiswaController::class, 'create']); //form untuk menambahkan data t_siswa
Route::post('/siswa', [SiswaController::class, 'store']);
Route::get('/kelas/create', [KelasController::class, 'create']); //form untuk menambahkan data t_kelas
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']); 
Route::patch('/siswa/{id}', [SiswaController::class, 'update']); 
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy']); 
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']); 
Route::patch('/kelas/{id}', [KelasController::class, 'update']); 
Route::delete('/kelas/{id}', [KelasController::class, 'destroy']); 

Route::resource('/guru', GuruController::class); //mengambil seluruh route yang ada




