<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\SiswaApiController;
use App\Http\Controllers\Api\KelasApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/siswa', [SiswaApiController::class, 'index']);
Route::post('/siswa', [SiswaApiController::class, 'store']);
Route::patch('/siswa/{id}', [SiswaApiController::class, 'patchupdate']);
Route::put('/siswa/{id}', [SiswaApiController::class, 'putupdate']);     
Route::delete('/siswa/{id}', [SiswaApiController::class, 'destroy']);

Route::get('/kelas', [KelasApiController::class, 'index']);
Route::post('/kelas', [KelasApiController::class, 'store']);
Route::patch('/kelas/{id}', [KelasApiController::class, 'patchupdate']);
Route::put('/kelas/{id}', [KelasApiController::class, 'putupdate']);     
Route::delete('/kelas/{id}', [KelasApiController::class, 'destroy']);